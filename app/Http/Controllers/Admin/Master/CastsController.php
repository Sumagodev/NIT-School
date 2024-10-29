<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Casts;
use App\Http\Services\Admin\Master\CastsServices;
use Validator;
use Illuminate\Validation\Rule;
class CastsController extends Controller
{

   public function __construct()
    {
        $this->service = new CastsServices();
    }
    public function index()
    {
        try {
            $maritalstatus_data = $this->service->getAll();
            return view('admin.pages.master.casts.list-cast', compact('maritalstatus_data'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function add()
    {
        return view('admin.pages.master.casts.add-cast');
    }

    public function store(Request $request) {
        $rules = [
            'cast_name' => 'required|unique:casts|max:255',
            // 'marathi_title' => 'required|unique:gender|max:255',
         ];
        $messages = [   
            'cast_name'       =>  'Please enter title.',
            'cast_name.unique' => 'Title already exist.',
            'cast_name.max'   => 'Please  enter text length upto 255 character only.',      
        ];

        try {
            $validation = Validator::make($request->all(),$rules,$messages);
            if($validation->fails() )
            {
                return redirect('add-casts')
                    ->withInput()
                    ->withErrors($validation);
            }
            else
            {
                $add_maritalstatus_data = $this->service->addAll($request);
                if($add_maritalstatus_data)
                {

                    $msg = $add_maritalstatus_data['msg'];
                    $status = $add_maritalstatus_data['status'];
                    if($status=='success') {
                        return redirect('list-casts')->with(compact('msg','status'));
                    }
                    else {
                        return redirect('add-casts')->withInput()->with(compact('msg','status'));
                    }
                }

            }
        } catch (Exception $e) {
            return redirect('add-casts')->withInput()->with(['msg' => $e->getMessage(), 'status' => 'error']);
        }
    }
    
    public function edit(Request $request)
    {
        $edit_data_id = base64_decode($request->edit_id);
        $cast_data = $this->service->getById($edit_data_id);
        return view('admin.pages.master.casts.edit-cast', compact('cast_data'));
   
    }

    public function update(Request $request)
{
    $id = $request->input('id'); // Assuming the 'id' value is present in the request
    $rules = [
        'cast_name' => ['required', 'max:255', Rule::unique('casts', 'cast_name')->ignore($id, 'id')],
        // 'marathi_title' => ['required', 'max:255', Rule::unique('maritalstatus', 'marathi_title')->ignore($id, 'id')],
    ];

    $messages = [
        'cast_name.required' => 'Please enter an title.',
        'cast_name.max' => 'Please enter an  title with a maximum of 255 characters.',
        'cast_name.unique' => 'The title already exists.',
        // 'marathi_title.required' => 'कृपया  शीर्षक प्रविष्ट करा.',
        // 'marathi_title.max' => 'कृपया २५५ अक्षरांपर्यंत  शीर्षक प्रविष्ट करा.',
        // 'marathi_title.unique' => 'शीर्षक आधीच अस्तित्वात आहे.',
    ];

    try {
        $validation = Validator::make($request->all(), $rules, $messages);

        if ($validation->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validation);
        } else {
            $update_maritalstatus_data = $this->service->updateAll($request);

            if ($update_maritalstatus_data) {
                $msg = $update_maritalstatus_data['msg'];
                $status = $update_maritalstatus_data['status'];

                if ($status == 'success') {
                    return redirect('list-casts')->with(compact('msg', 'status'));
                } else {
                    return redirect()->back()
                        ->withInput()
                        ->with(compact('msg', 'status'));
                }
            }
        }
    } catch (Exception $e) {
        return redirect()->back()
            ->withInput()
            ->with(['msg' => $e->getMessage(), 'status' => 'error']);
    }
}

    public function show(Request $request)
    {
        try {
            $casts_data = $this->service->getById($request->show_id);
            return view('admin.pages.master.casts.show-cast', compact('casts_data'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function updateOne(Request $request){
        // dd($request);
        try {
            $active_id = $request->active_id;
        $result = $this->service->updateOne($active_id);
            return redirect('list-casts')->with('flash_message', 'Updated!');  
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function destroy(Request $request){
        try {
            $maritalstatus_data = $this->service->deleteById($request->delete_id);
            if ($maritalstatus_data) {
                $msg = $maritalstatus_data['msg'];
                $status = $maritalstatus_data['status'];
                if ($status == 'success') {
                    return redirect('list-casts')->with(compact('msg', 'status'));
                } else {
                    return redirect()->back()
                        ->withInput()
                        ->with(compact('msg', 'status'));
                }
            }
        } catch (\Exception $e) {
            return $e;
        }
    } 

}