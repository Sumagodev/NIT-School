<?php

namespace App\Http\Controllers\Api\VoterInformation;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Validator;
use App\Models\ {
	VoterInformation
};
use Illuminate\Support\Facades\Config;



class VoterInformationController extends Controller
{
    
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
   
    

    
}
