<?php

namespace App\Http\Controllers\Admin\KaizenRegister;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Validator;
use App\Models\ {
	VoterInformation,
    Casts,
    Gender,
    TblArea
};
use Illuminate\Support\Facades\Config;



class KaizenRegistrationController extends Controller
{
	public function getVoterRegisteration()
    {
        try {
            // $contactusdata = $this->service->getContactUs();
            return view('website.pages.contactus.contact-us');

        } catch (\Exception $e) {
            return $e;
        }
    } 
    
    public function submitVoterRegistration()
    {
        $cast_data = Casts::where('is_active', '1')
                    ->orderBy('cast_name', 'asc')
                    ->get(['id', 'cast_name']);
                    
        $gender_data = Gender::where('is_active', '1')
                    ->orderBy('gender_name', 'asc')
                    ->get(['id', 'gender_name']);
                    
        $dynamic_taluka = TblArea::where('location_type', '3')
                    ->where('is_active', '1')
                    ->select('location_id','name')
                    ->orderBy('name', 'asc')
                    ->get()
                    ->toArray();
                    
                    // dd($gender_data);
        
        return view('admin.pages.voterregistration.add-voterregistration',compact('cast_data','gender_data','dynamic_taluka'));
    }
    
    public function add(Request $request ){
        // Log::info($request);
        $all_data_validation = [
            'firstName' => 'required',
            'middleName' => 'required',
            'lastName' => 'required',
            // 'district_id' => 'required', 
            'talukaId' => 'required',
            'villageId' => 'required',
            'mobile' => ['required', 'digits:10', 'regex:/^[6789]\d{9}$/'],
            'casteId' => 'required',
            'genderId' => 'required',
            'dateOfBirth' => 'required',
        ];
        
        $mobile_number_to_skip = '9876543210'; // Replace this with the number you want to allow duplicates for

        // Add the unique constraint conditionally
        if ($request->input('mobile') !== $mobile_number_to_skip) {
            $all_data_validation['mobile'][] = 'unique:voter_information,mobile_number';
        }
        
        if ($request->input('casteId') == '999999') {
            $all_data_validation['otherCasteName'][] = 'required';
        }
        
        $customMessages = [
            'firstName.required'=>'First name is required',
            'middleName.required'=>'Middle name is required',
            'lastName.required'=>'Last name is required',
            'talukaId.required'=>'Please select a taluka.',
            'villageId.required'=>'Please select a village.',
            'mobile.required'=>'Mobile number is required.',
            'mobile.digits'=>'Mobile number must be 10 digits.',
            'mobile.regex' => 'Mobile number must start with 9, 8, 7 or 6.',
            
            'casteId.required'=>'Cast is required.',
            'genderId.required'=>'Gender is required.',
            'dateOfBirth.required'=>'Birth Date is required.',
       ];
     
        $validator = Validator::make($request->all(), $all_data_validation, $customMessages);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $errorMessage = '';
            $errorMessage = implode(" \n", $validator->errors()->all());
            return response()->json([
                'status' => 'false',
                'message' => 'Validation Fail: ' . $errorMessage,
            ], 200);
        }


        try {
            // Check if the user exists
            $user = Auth::user();

            if(isset($request->voterId))
            {
                $voterId=$request->voterId;
            }else{
                $voterId=0;
            }

            if(isset($request->ward_no))
            {
                $wardNo=$request->ward_no;
            }else{
                $wardNo=0;
            }

            if(isset($request->casteId) && isset($request->casteId)=='999999')
            {
                $castName=$request->otherCasteName;
            }else{
                $castName=$request->casteName;
            }

            $labour_data = new VoterInformation();
            $labour_data->added_by = $request->addedByUserId; // Assign the user ID
            $labour_data->f_name = $request->firstName;
            $labour_data->m_name = $request->middleName;
            $labour_data->l_name = $request->lastName;
            $labour_data->taluka_id = $request->talukaId;
            $labour_data->village_id = $request->villageId;
            $labour_data->mobile_number = $request->mobile;
            $labour_data->cast = $request->casteId;
            $labour_data->gender = $request->genderId;
            $labour_data->date_of_birth = $request->dateOfBirth;
            $labour_data->voter_id = $voterId;
            $labour_data->ward_no = $wardNo;
            $labour_data->other_cast_name = $castName;
            $labour_data->voter_address = $request->address;


            $labour_data->save();

            $last_insert_id = $labour_data->id;

            return response()->json([
                'status' => 'True',
                'message' => 'Voter information added successfully',
            ]);

        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    public function addedvoterscount(Request $request) {
        try {
            $user = auth()->user();    
          
            $counts = VoterInformation::where('added_by', $user->id)
                ->get()
                ->count();
    
            // Return the counts in the response
            return response()->json([
                'status' => 'true',
                'message' => 'Counts retrieved successfully',
                'total_voter_added' => $counts,
            ], 200);
    
        } catch (\Exception $e) {
            return response()->json(['status' => 'false', 'message' => 'Counts get failed', 'error' => $e->getMessage()], 500);
        }
    }
    
    public function getVillage(Request $request)
    {
        $talukaId = $request->input('talukaId');

        $village = TblArea::where('parent_id', $talukaId)
                    ->where('is_active', '1')
                    ->orderBy('name', 'asc')
                    ->get(['location_id', 'name']);
                    // dd($village);
              return response()->json(['village' => $village]);
    }
    
    
    public function voter_registration(Request $request){
        // dd($request);
        // dd('ddddddddddddddddddddd');
        $all_data_validation = [
        'f_name' => 'required|regex:/^[a-zA-Z\s]+$/u|max:255',
        'm_name' => 'required|regex:/^[a-zA-Z\s]+$/u|max:255',
        'l_name' => 'required|regex:/^[a-zA-Z\s]+$/u|max:255',
        'mobile_number' =>  'required|unique:voter_information,mobile_number|regex:/^[0-9]{10}$/',
        'dob_date_name' => 'required',
        'gender' => 'required',
        'taluka' => 'required',
        'village_id' => 'required',
        'address' => ['required','regex:/^(?![0-9\s]+$)[A-Za-z0-9\s\.,#\-\(\)\[\]\{\}]+$/','max:255'],
        'cast' => 'required',
     ];      
        
        if ($request->input('cast') == '999999') {
            $all_data_validation['otherCasteName'][] = 'required';
        }

        $customMessages = [
            // First Name
            'f_name.required' => 'Please enter first name.',
            'f_name.regex' => 'Please enter only alphabets in the first name.',
            'f_name.max' => 'First name should not exceed 255 characters.',

            // Middle Name
            'm_name.required' => 'Please enter middle name.',
            'm_name.regex' => 'Please enter only alphabets in the middle name.',
            'm_name.max' => 'Middle name should not exceed 255 characters.',

            // Last Name
            'l_name.required' => 'Please enter last name.',
            'l_name.regex' => 'Please enter only alphabets in the last name.',
            'l_name.max' => 'Last name should not exceed 255 characters.',

            //Mobile Number
            'mobile_number.required' => 'Please enter your mobile number.',
            'mobile_number.regex' => 'Mobile number should be exactly 10 digits.',
            'mobile_number.unique' => 'The mobile number already exists in the system.',

            // // Date of Birth (dob_date_name)
            'dob_date_name.required' => 'Please enter your date of birth.',

            // // Gender
            'gender.required' => 'Please select your gender.',

            // // Taluka
            'taluka.required' => 'Please select a taluka.',

            // // Village
            'village_id.required' => 'Please select a village.',

            // // Address
            'address.required' => 'Please enter your address.',
            'address.regex' => 'Address can contain letters, numbers, and punctuation marks but not only numbers.',
            'address.max' => 'Address should not exceed 255 characters.',

            // // Caste
            'cast.required' => 'Please select a cast.',

            // Other Caste Name (only when caste is '999999')
            // 'otherCasteName.required' => 'Please specify your caste.',
        ];


        $validator = Validator::make($request->all(), $all_data_validation, $customMessages);
        
        if($validator->fails() )
        {
             // Check if the mobile number error is present
        $messages = $validator->messages();
        $mobileError = $messages->first('mobile_number');
        
        if ($mobileError) {
            return redirect()->back()
                ->withInput()
                ->with('status', 'error')
                ->with('alert_type', 'sweetalert')
                ->with('message', 'The mobile number already exists in the system.');
        } else {
            return redirect()->back()
                ->withInput()
                ->with('status', 'error')
                ->with('alert_type', 'bootstrap')
                ->with('msg', 'There were some validation errors.');
        }
        
            // dd('jjjjjjjjjjj');
            return redirect('VoterRegistration')
            ->withInput()
            ->withErrors($validator);
        }
        else
        {
            // dd('ppppppppp');
            // if(isset($request->input('voter_id')))
            // {
            //     $voterId=$request->input('voter_id');
            // }else{
            //     $voterId=0;
            // }
            
            $voterId = $request->input('voter_id') ?? 0;

            $castValue = $request->input('cast');

            // Check if 'cast' is not null and equals '999999'
            if ($castValue !== null && $castValue === '999999') {
                $castName = $request->input('otherCasteName');
            } else {
                $castName = $request->input('casteName');
            }


            $labour_data = new VoterInformation();
            $labour_data->added_by = '1'; // Assign the user ID
            $labour_data->f_name = $request->input('f_name');
            $labour_data->m_name = $request->input('m_name');
            $labour_data->l_name = $request->input('l_name');
            $labour_data->taluka_id = $request->input('taluka');
            $labour_data->village_id = $request->input('village_id');
            $labour_data->mobile_number = $request->input('mobile_number');
            $labour_data->gender = $request->input('gender');
            $labour_data->cast = $request->input('cast');
            $labour_data->date_of_birth = $request->input('dob_date_name');
            $labour_data->voter_id = $request->input('voterId');
            $labour_data->ward_no = '0';
            $labour_data->other_cast_name = $castName;
            $labour_data->voter_address = $request->input('address');


            $labour_data->save();
// dd($labour_data);
            $last_insert_id = $labour_data->id;
          
            if($last_insert_id)
            {
              
                $msg = "Information Added Successfully";
                $status = "success";
                if($status=='success') {
                    return redirect('VoterRegistration')->with(compact('msg','status'));
                }
                else {
                    return redirect('VoterRegistration')->withInput()->with(compact('msg','status'));
                }
            }
            
        }
    }
   
    

    
}
