<?php
namespace App\Http\Repository\Admin\Products;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use App\Imports\ProductsImport; 
use Maatwebsite\Excel\Facades\Excel;
use Session;
use App\Models\{
	User,
	Permissions,
	RolesPermissions,
	Roles,
	GramSevakTabletDistribution,
	KaizenEmpDetails,
	KaizenManagmentDetails,
	ProductDetails,
	DivisionAchievement
};
use Illuminate\Support\Facades\Mail;

class ProductRepository
{

	public function getProductsList() {
        $products_data = ProductDetails::select('id',
								'product_id',
								'product_name',
								'product_weight',
								'category',
								'sap_code',
								'gt_code',
								'trade',
								'is_active')
							->orderBy('id', 'desc')
							// ->groupBy('gram_sevak_tablet_distribution.user_id')
							->get();

// dd($data_users);
		return $products_data;
	}

	public function getProducts() {
        $products_data = ProductDetails::where('is_active', '1')
								->select('id',
								'product_id',
								'product_name',
								'product_weight',
								'category',
								'sap_code',
								'gt_code',
								'trade',
								'is_active')
							->orderBy('id', 'desc')
							// ->groupBy('gram_sevak_tablet_distribution.user_id')
							->get();

// dd($data_users);
		return $products_data;
	}

	public function register($request)
	{
		// dd($request);
		$data =array();
		
		if($request['formtype'] == 'add'){

			if ($request->hasFile('excel_file')) {
				$file = $request->file('excel_file');
				Excel::import(new ProductsImport, $file);
			}


		$user_data = new ProductDetails();
		$user_data->product_id = $request['product_id'];
		$user_data->product_name = $request['product_name'];
		$user_data->product_weight = $request['product_weight'];
		$user_data->category = $request['category'];
		$user_data->sap_code = $request['sap_code'];
		$user_data->gt_code = $request['gt_code'];
		$user_data->trade = $request['trade'];
		// $user_data->kaizen_type = $kaizenTypesString;
		$user_data->save();
		$last_insert_id = $user_data->id;
		}if($request['formtype'] == 'edit'){

			$user_data = ProductDetails::where('id',base64_decode($request['prodid'])) 
						->update([
							'product_id' => $request['product_id'],
							'product_name' => $request['product_name'],
							'product_weight' => $request['product_weight'],
							'category' => $request['category'],
							'sap_code' => $request['sap_code'],
							'gt_code' => $request['gt_code'],
							'trade' => $request['trade'],
						]);
						$last_insert_id = $request['prodid'];
		}
		return $last_insert_id;

	}

	public function updateOneProduct($request){
        try {
            
            $area_data = ProductDetails::find($request); // Assuming $request directly contains the ID

            // Assuming 'is_active' is a field in the userr model
            if ($area_data) {
                $is_active = $area_data->is_active === 1 ? 0 : 1;
                $area_data->is_active = $is_active;
                $area_data->save();
// dd($area_data);
                return [
                    'msg' => 'Product updated successfully.',
                    'status' => 'success'
                ];
            }

            return [
                'msg' => 'Product not found.',
                'status' => 'error'
            ];
        } catch (\Exception $e) {
            return [
                'msg' => 'Failed to update Product.',
                'status' => 'error'
            ];
        }
    }

	public function editProduct($request)
	{
// dd($request);
		$data_users = [];

		$data_users_data = ProductDetails::where('id', '=', base64_decode($request->productId))
			->select(
					'product_id',
					'product_name',
					'product_weight',
					'category',
					'sap_code',
					'gt_code',
					'trade',
			)->get();

		$data_product = $data_users_data;
	// dd($data_product);

		return $data_product;
	}

	public function UploadProduct($request)
	{
		// dd($request);
		$data =array();
		

			if ($request->hasFile('excel_file')) {
				$file = $request->file('excel_file');
				Excel::import(new ProductsImport, $file);
				// $successCount = $import->successCount;
        		// $failureCount = $import->failureCount;	
			}

			// dd($successCount);
			$last_insert_id = '1';
		return $last_insert_id;

	}

	public function addDivisionAchievement($request)
	{
		// dd($request);
		$data =array();
		
		// if($request['formtype'] == 'add'){

		$asign_driver = count($request['product_id']);
for($i=0; $i<$asign_driver; $i++){
// dd($request['machine_id'][$i]);

		$user_data = new DivisionAchievement();
		$user_data->achivement_date = $request['achivement_date'];
		$user_data->section_id = $request['section_id'];
		$user_data->shift_name = $request['shift_name'];
		$user_data->shift_officer = $request['shift_officer'];
		$user_data->machine_id = $request['machine_id'][$i];
		$user_data->product_id = $request['product_id'][$i];
		$user_data->aq_data = $request['aq_data'][$i];
		$user_data->at_data = $request['at_data'][$i];
		$user_data->pq_data = $request['pq_data'][$i];
		$user_data->pt_data = $request['pt_data'][$i];
		$user_data->cap_data = $request['cap_data'][$i];
		$user_data->ct_data = $request['ct_data'][$i];
		// $user_data->kaizen_type = $kaizenTypesString;
		$user_data->save();
}
		$last_insert_id = $user_data->id;
		// }if($request['formtype'] == 'edit'){

		// 	$user_data = ProductDetails::where('id',base64_decode($request['prodid'])) 
		// 				->update([
		// 					'product_id' => $request['product_id'],
		// 					'product_name' => $request['product_name'],
		// 					'product_weight' => $request['product_weight'],
		// 					'category' => $request['category'],
		// 					'sap_code' => $request['sap_code'],
		// 					'gt_code' => $request['gt_code'],
		// 					'trade' => $request['trade'],
		// 				]);
		// 				$last_insert_id = $request['prodid'];
		// }
		return $last_insert_id;

	}

}