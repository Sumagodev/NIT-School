<?php

namespace App\Http\Controllers\Admin\EmployeeRegistration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Admin\LoginRegister\RegisterServices;
use App\Exports\UsersExport;
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
	KaizenManagmentDetails
};
use Validator;
use session;
use Config;

class EmployeeRegistrationController extends Controller {
    /**
     * Topic constructor.
     */
    public function __construct()
    {
        $this->service = new RegisterServices();
    }

    public function index()
    {

        $register_user = $this->service->index();
        return view('admin.pages.users.users-list',compact('register_user'));
    }

    public function addEmployee(){
        $roles = Roles::where('is_active', true)
                        ->whereNot('id', 1)
                        ->select('id','role_name')
                        ->get()
                        ->toArray();
        $permissions = Permissions::where('is_active', true)
                            ->select('id','route_name','permission_name','url')
                            ->get()
                            ->toArray();
        $dynamic_taluka = TblArea::where('location_type', '3')
                            ->where('is_active', '1')
                            ->select('location_id','name')
                            ->orderBy('name', 'asc')
                            ->get()
                            ->toArray();
                            // dd($dynamic_taluka);
    	return view('admin.pages.users.add-admin',compact('roles','permissions','dynamic_taluka'));
    }

    public function register(Request $request){

        $rules = [
    // 'email' => 'required|unique:users,email|regex:/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z])+\.)+([a-zA-Z0-9]{2,4})+$/',
    'plant' => 'required',
    'employee_number' => 'required|unique:kaizen_emp_details,employee_number',
    'employee_name' => 'required|regex:/^[a-zA-Z\s]+$/u|max:255',
    'team_member' => 'required|regex:/^[a-zA-Z\s]+$/u|max:255',
    'employee_department' => 'required',
    'kaizen_type' => 'required|array|min:1',
    'kaizen_theme' => 'required|regex:/^[a-zA-Z\s]+$/u|max:552',
    'before_kaizen_cond' => 'required|regex:/^[a-zA-Z\s]+$/u|max:255',
    'after_kaizen_cond' => 'required|regex:/^[a-zA-Z\s]+$/u|max:255',
    // 'kaizen_type' => 'required|array|min:1',
    'benefits' => 'required|array|min:1',

    // 'address' => ['required','regex:/^(?![0-9\s]+$)[A-Za-z0-9\s\.,#\-\(\)\[\]\{\}]+$/','max:255'],
    // 'village' => 'required',
    // 'password' => 'required|min:8|max:15', // Added password validation
    // 'password_confirmation' => 'required|same:password', // Added confirm password validation
];       

        $messages = [   
    'plant.required' => 'Please select Taluka.',

    'employee_number.required' => 'Please enter number.',
    // 'number.regex' => 'Please enter only a 10-digit number.',
    'number.unique' => 'Your mobile number already exists.',

    'employee_name.required' => 'Please enter first name.',
    'employee_name.regex' => 'Please enter text only.',
    'employee_name.max' => 'First name can only be up to 255 characters.',

    'team_member.required' => 'Please enter middle name.',
    'team_member.regex' => 'Please enter text only.',
    'team_member.max' => 'Middle name can only be up to 255 characters.',

    'employee_department.required' => 'Please select Taluka.',

    'kaizen_type.required' => 'Please select at least one Kaizen type.',
    'kaizen_type.min' => 'You must select at least one Kaizen type.',

    'kaizen_theme.required' => 'Please enter first name.',
    'kaizen_theme.regex' => 'Please enter text only.',
    'kaizen_theme.max' => 'First name can only be up to 255 characters.',

    'before_kaizen_cond.required' => 'Please enter middle name.',
    'before_kaizen_cond.regex' => 'Please enter text only.',
    'before_kaizen_cond.max' => 'Middle name can only be up to 255 characters.',

    'after_kaizen_cond.required' => 'Please enter middle name.',
    'after_kaizen_cond.regex' => 'Please enter text only.',
    'after_kaizen_cond.max' => 'Middle name can only be up to 255 characters.',

    'benefits.required' => 'Please select at least one Kaizen type.',
    'benefits.min' => 'You must select at least one Kaizen type.',


    // 'l_name.required' => 'Please enter last name.',
    // 'l_name.regex' => 'Please enter text only.',
    // 'l_name.max' => 'Last name can only be up to 255 characters.',

    

    // 'address.required' => 'Please enter an address.',
    // 'address.regex' => 'Please enter a valid address.',
    // 'address.max' => 'Address can only be up to 255 characters.',

    // 'village.required' => 'Please select Village.',

    // 'password.required' => 'Please enter a password.',
    // 'password.min' => 'Password must be at least 8 characters.',
    // 'password.max' => 'Password cannot be longer than 15 characters.',
    
    // 'password_confirmation.required' => 'Please confirm your password.',
    // 'password_confirmation.same' => 'Passwords do not match.',
];



    $validation = Validator::make($request->all(),$rules,$messages);
    if($validation->fails() )
    {
        return redirect('register')
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
                return redirect('list')->with(compact('msg','status'));
            }
            else {
                return redirect('register')->withInput()->with(compact('msg','status'));
            }
        }
        
    }
}

public function getEmplyeeDetails(Request $request)
    {
        $employee_number = $request->input('EmployeeNumber');

        $query = KaizenEmpDetails::leftJoin('kaizen_managment_details', 'kaizen_emp_details.id', '=', 'kaizen_managment_details.kaizen_emp_id')
                ->select('plant','employee_number','employee_name','team_member','employee_department','kaizen_type','kaizen_theme','before_kaizen_cond',
				'want_before_kaizen_image','before_kaizen_image','after_kaizen_cond','want_after_kaizen_image','after_kaizen_image','benefits',
                'qualitative_details','qualitative_details_annual','units','horizontal_deployement','horizontal_deployement_details','horizontal_deployment_text',
                'select_documents','kaizen_emp_details.created_at as createdate')
                ->where('kaizen_emp_details.employee_number', $employee_number);
        
          $data_output = $query->get();
                return response()->json(['emplyee_ajax_data' => $data_output]);

    }



    
  
}