<?php

namespace App\Http\Controllers\Admin\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Admin\Products\ProductServices;
// use App\Exports\UsersExport;
use App\Imports\ProductsImport; 
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use App\Models\ {
    Roles,
    Permissions,
    TblArea,
    User,
    Usertype,
    KaizenEmpDetails,
	KaizenManagmentDetails,
    ProductDetails,
    DivisionAchievement
};
use Validator;
use session;
use Config;

class ProductsController extends Controller {
    /**
     * Topic constructor.
     */
    public function __construct()
    {
        $this->service = new ProductServices();
    }

    public function index()
    {

        $products_data = $this->service->getProducts();
        return view('admin.pages.products.add-div-achievement',compact('products_data'));
    }

    public function addProduct(){
        // $roles = Roles::where('is_active', true)
        //                 ->whereNot('id', 1)
        //                 ->select('id','role_name')
        //                 ->get()
        //                 ->toArray();


        // $permissions = Permissions::where('is_active', true)
        //                     ->select('id','route_name','permission_name','url')
        //                     ->get()
        //                     ->toArray();
        // $dynamic_taluka = TblArea::where('location_type', '3')
        //                     ->where('is_active', '1')
        //                     ->select('location_id','name')
        //                     ->orderBy('name', 'asc')
        //                     ->get()
        //                     ->toArray();
        //                     // dd($dynamic_taluka);

        $products_data = $this->service->index();
    	return view('admin.pages.products.add-product',compact('products_data'));
    }

    public function register(Request $request){

    if($request['formtype'] == 'add'){    
        $rules = [
                    'product_id' => 'required|unique:product_details,product_id',
                    'product_name' => 'required',
                    'product_weight' => 'required',
                    'category' => 'required',
                    'sap_code' => 'required',
                    'gt_code' => 'required',
                    'trade' => 'required',
                ];       

        $messages = [   
                    'product_id.required' => 'Please Enter Product ID.',
                    'product_id.unique' => 'Your Product ID already exists.',

                    'product_name.required' => 'Please enter product name.',

                    'product_weight.required' => 'Please enter product weight.',

                    'category.required' => 'Please select category.',

                    'sap_code.required' => 'Please enter SAP Code.',

                    'gt_code.required' => 'Please enter GT Code.',

                    'trade.required' => 'Please enter Trade.',

                ];
    }if($request['formtype'] == 'edit'){
        $rules = [
            'product_id' => 'required',
            'product_name' => 'required',
            'product_weight' => 'required',
            'category' => 'required',
            'sap_code' => 'required',
            'gt_code' => 'required',
            'trade' => 'required',
        ];       

$messages = [   
            'product_id.required' => 'Please Enter Product ID.',
            'product_id.unique' => 'Your Product ID already exists.',

            'product_name.required' => 'Please enter product name.',

            'product_weight.required' => 'Please enter product weight.',

            'category.required' => 'Please select category.',

            'sap_code.required' => 'Please enter SAP Code.',

            'gt_code.required' => 'Please enter GT Code.',

            'trade.required' => 'Please enter Trade.',

        ];
    }

    $validation = Validator::make($request->all(),$rules,$messages);
    if($validation->fails() )
    {
        return redirect('products')
        ->withInput()
        ->withErrors($validation);
    }
    else
    {
        $register_admin = $this->service->register($request);
      
        if($register_admin)
        {
          
            $msg = $register_admin['msg'];
            $status = $register_admin['status'];
            if($status=='success') {
                return redirect('products')->with(compact('msg','status'));
            }
            else {
                return redirect('products')->withInput()->with(compact('msg','status'));
            }
        }
        
    }
}

public function updateOneProduct(Request $request){
    try {
        $active_id = $request->active_id;
    $result = $this->service->updateOneProduct($active_id);
        return redirect('products')->with('flash_message', 'Updated!');  
    } catch (\Exception $e) {
        return $e;
    }
}

// public function edit($id)
// {
//     // Decode the base64 ID
//     $id = base64_decode($id);

//     // Find the product by ID
//     $product = Product::find($id);

//     // Return the product data as JSON for AJAX request
//     return response()->json($product);
// }

public function editProduct(Request $request){
// dd($request);

    $data_product = $this->service->editProduct($request);
    return response()->json($data_product);
    
    // return view('admin.pages.area.edit-village',compact('data_product'));
}

public function update(Request $request, $id)
{
    $id = base64_decode($id);

    // Validate the request
    $request->validate([
        'product_id' => 'required',
        'product_name' => 'required',
        'product_weight' => 'required|numeric',
        'category' => 'required',
        'sap_code' => 'required',
        'gt_code' => 'required',
        'trade' => 'required',
    ]);

    // Find and update the product
    $product = Product::find($id);
    $product->product_id = $request->input('product_id');
    $product->product_name = $request->input('product_name');
    $product->product_weight = $request->input('product_weight');
    $product->category = $request->input('category');
    $product->sap_code = $request->input('sap_code');
    $product->gt_code = $request->input('gt_code');
    $product->trade = $request->input('trade');
    $product->save();

    return redirect()->route('products')->with('success', 'Product updated successfully');
}

public function UploadProduct(Request $request){

        $rules = [
                    'excel_file' => 'nullable|file|mimes:xls,xlsx',
                ];       

        $messages = [   
                    'excel_file_modal.mimes' => 'The file must be a valid Excel file (.xls or .xlsx).',

                ];
    

    $validation = Validator::make($request->all(),$rules,$messages);
    if($validation->fails() )
    {
        return redirect('products')
        ->withInput()
        ->withErrors($validation);
    }
    else
    {
        $register_admin = $this->service->UploadProduct($request);
      
        if($register_admin)
        {
          
            $msg = $register_admin['msg'];
            $status = $register_admin['status'];
            if($status=='success') {
                return redirect('products')->with(compact('msg','status'));
            }
            else {
                return redirect('products')->withInput()->with(compact('msg','status'));
            }
        }
        
    }
}


public function addDivisionAchievement(Request $request){

    // if($request['formtype'] == 'add'){    
        // $rules = [
        //             'product_id' => 'required|unique:product_details,product_id',
        //             'product_name' => 'required',
        //             'product_weight' => 'required',
        //             'category' => 'required',
        //             'sap_code' => 'required',
        //             'gt_code' => 'required',
        //             'trade' => 'required',
        //         ];       

        // $messages = [   
        //             'product_id.required' => 'Please Enter Product ID.',
        //             'product_id.unique' => 'Your Product ID already exists.',

        //             'product_name.required' => 'Please enter product name.',

        //             'product_weight.required' => 'Please enter product weight.',

        //             'category.required' => 'Please select category.',

        //             'sap_code.required' => 'Please enter SAP Code.',

        //             'gt_code.required' => 'Please enter GT Code.',

        //             'trade.required' => 'Please enter Trade.',

        //         ];
//     }if($request['formtype'] == 'edit'){
//         $rules = [
//             'product_id' => 'required',
//             'product_name' => 'required',
//             'product_weight' => 'required',
//             'category' => 'required',
//             'sap_code' => 'required',
//             'gt_code' => 'required',
//             'trade' => 'required',
//         ];       

// $messages = [   
//             'product_id.required' => 'Please Enter Product ID.',
//             'product_id.unique' => 'Your Product ID already exists.',

//             'product_name.required' => 'Please enter product name.',

//             'product_weight.required' => 'Please enter product weight.',

//             'category.required' => 'Please select category.',

//             'sap_code.required' => 'Please enter SAP Code.',

//             'gt_code.required' => 'Please enter GT Code.',

//             'trade.required' => 'Please enter Trade.',

//         ];
//     }

    // $validation = Validator::make($request->all(),$rules,$messages);
    // if($validation->fails() )
    // {
    //     return redirect('products')
    //     ->withInput()
    //     ->withErrors($validation);
    // }
    // else
    // {
        $register_admin = $this->service->addDivisionAchievement($request);
      
        if($register_admin)
        {
          
            $msg = $register_admin['msg'];
            $status = $register_admin['status'];
            if($status=='success') {
                return redirect('products')->with(compact('msg','status'));
            }
            else {
                return redirect('products')->withInput()->with(compact('msg','status'));
            }
        }
        
    // }
}
    
  
}