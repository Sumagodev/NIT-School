<?php
namespace App\Http\Repository\Admin\LoginRegister;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\{
	User,
	Permissions,
	RolesPermissions,
	Roles,
	GramSevakTabletDistribution,
	VoterInformation
};
use Illuminate\Support\Facades\Mail;

class UserRepository
{

	public function getUsersList() {
		$sess_user_id=session()->get('user_id');
		$sess_user_role=session()->get('role_id');

        $data_users = User::where('users.role_id', '3')
							->where('users.added_by', $sess_user_id)
							->select('users.id',
								'users.email',
								'users.f_name',
								'users.m_name',
								'users.l_name',
								'users.number',
								'users.address',
								'users.district',
								'users.taluka',
								'users.village',
								// 'users.pincode',
								'users.id',
								'users.is_active')
							->orderBy('users.id', 'desc')
							->get();
							// dd($data_users);
							foreach ($data_users as $key => $value) {
								$value->count_added =VoterInformation::where(['added_by'=>$value->id,'is_active'=>'1'])
								->count();
								// ->get();
							}


		return $data_users;
	}


	public function permissionsData()
	{
		$permissions = Permissions::where('is_active', true)
			->select('id', 'route_name', 'permission_name', 'url')
			->get()
			->toArray();

		return $permissions;
	}
	// public function register($request)
	// {
	// 	$ipAddress = getIPAddress($request);
	// 	$user_data = new User();
	// 	$user_data->email = $request['email'];
	// 	// $user_data->u_uname = $request['u_uname'];
	// 	$user_data->password = bcrypt($request['password']);
	// 	$user_data->role_id = $request['role_id'];
	// 	$user_data->f_name = $request['f_name'];
	// 	$user_data->m_name = $request['m_name'];
	// 	$user_data->l_name = $request['l_name'];
	// 	$user_data->number = $request['number'];
	// 	$user_data->designation = $request['designation'];
	// 	$user_data->address = $request['address'];
	// 	$user_data->state = $request['state'];
	// 	$user_data->city = $request['city'];
	// 	$user_data->pincode = $request['pincode'];
	// 	$user_data->ip_address = $ipAddress;
	// 	$user_data->is_active = isset($request['is_active']) ? true : false;
	// 	$user_data->save();

	// 	$last_insert_id = $user_data->id;
	// 	// $this->insertRolesPermissions($request, $last_insert_id);
	// 	return $last_insert_id;
	// }

	public function register($request)
	{
		$sess_user_id=session()->get('user_id');
		$sess_user_role=session()->get('role_id');

		$data =array();
		$user_data = new User();
		$user_data->email = $request['email'];
		$user_data->password = bcrypt($request['password']);
		$user_data->other_pass = $request['password'];
		$user_data->role_id = '3';
		$user_data->f_name = $request['f_name'];
		$user_data->m_name = $request['m_name'];
		$user_data->l_name = $request['l_name'];
		$user_data->number = $request['number'];
		$user_data->address = $request['address'];
		$user_data->district	 = '1';
		$user_data->taluka	 = $request['taluka'];
		$user_data->village = $request['village'];
		$user_data->ip_address = 'null';
		$user_data->user_agent = 'null';
		// $user_data->pincode = $request['pincode'];
		$user_data->user_type = '1';
		$user_data->added_by = $sess_user_id;
		$user_data->is_active = isset($request['is_active']) ? true : false;
		$user_data->save();

		$last_insert_id = $user_data->id;
        return $last_insert_id;

	}

	public function update($request)
	{
        $ipAddress = getIPAddress($request);
		$user_data = User::where('id',$request['edit_id']) 
						->update([
							'f_name' => $request['f_name'],
							'm_name' => $request['m_name'],
							'l_name' => $request['l_name'],
							'number' => $request['number'],
							'address' => $request['address'],
							'taluka' => $request['taluka'],
							'village' => $request['village'],
							'is_active' => isset($request['is_active']) ? true :false,
						]);
		// dd($user_data);
		// $this->updateRolesPermissions($request, $request->edit_id);
		return $request->edit_id;
	}


	// private function updateRolesPermissions($request, $last_insert_id) {

	// 	$permissions_data_from_table  = $this->permissionsData();
	// 	$update_data = array();
	// 	foreach ($permissions_data_from_table as $key => $data) {
	// 		$permission_id  = 'permission_id_'.$data['id'];
	// 		$per_add  = 'per_add_'.$data['id'];
	// 		$per_update  = 'per_update_'.$data['id'];
	// 		$per_delete  = 'per_delete_'.$data['id'];

	// 		$update_data['role_id'] = $request->role_id;
	// 		if($request->has($per_add)) {
	// 			$update_data['per_add']  = true;
	// 		} else {
	// 			$update_data['per_add']  = false;
	// 		}

	// 		if($request->has($per_update)) {
	// 			$update_data['per_update']  = true;
	// 		} else {
	// 			$update_data['per_update']  = false;
	// 		}

	// 		if($request->has($per_delete)) {
	// 			$update_data['per_delete']  = true;
	// 		} else {
	// 			$update_data['per_delete']  = false;
	// 		}

	// 		$permissions_data_all = RolesPermissions::where([
	// 			'user_id' =>$request['edit_id'],
	// 			'permission_id' =>$data['id']
	// 		])->get()->toArray();
	// 		if(count($permissions_data_all)>0) {

	// 			$permissions_data = RolesPermissions::where([
	// 				'user_id' =>$request['edit_id'],
	// 				'permission_id' =>$data['id']
	// 			])->update($update_data);
	// 		} else {
	// 			$update_data['user_id']  = $request['edit_id'];
	// 			$update_data['permission_id']  = $data['id'];
	// 			$permissions_data = RolesPermissions::insert($update_data);
	// 		}

	// 	}
	// 	return "ok";
	// }


	// private function insertRolesPermissions($request, $last_insert_id) {

	// 	$permissions_data_from_table  = $this->permissionsData();
	// 	foreach ($permissions_data_from_table as $key => $data) {
	// 		$permission_id  = 'permission_id_'.$data['id'];
	// 		$per_add  = 'per_add_'.$data['id'];
	// 		$per_update  = 'per_update_'.$data['id'];
	// 		$per_delete  = 'per_delete_'.$data['id'];
	// 		if($request->has($permission_id) && ($request->has($per_add) || $request->has($per_update) || $request->has($per_delete))) {
	// 			// dd("I am here for permission");
	// 			$permissions_data = new RolesPermissions();
	// 			$permissions_data->permission_id = $data['id'];
	// 			$permissions_data->role_id = $request->role_id;
	// 			$permissions_data->user_id = $last_insert_id;

	// 			if($request->has($per_add)) {
	// 				$permissions_data->per_add  = true;
	// 			}

	// 			if($request->has($per_update)) {
	// 				$permissions_data->per_update  = true;
	// 			}

	// 			if($request->has($per_delete)) {
	// 				$permissions_data->per_delete  = true;
	// 			}
	// 			$permissions_data->save();
	// 		}

	// 	}
	// 	return "ok";
	// }

	public function checkDupCredentials($request)
	{
		return User::where('email', '=', $request['email'])
			// ->orWhere('u_uname','=',$request['u_uname'])
			->select('id')->get();
	}

	public function editUsers($reuest)
	{

		$data_users = [];

		$data_users['roles'] = Roles::where('is_active', true)
			->select('id', 'role_name')
			->get()
			->toArray();
		$data_users['permissions'] = Permissions::where('is_active', true)
			->select('id', 'route_name', 'permission_name', 'url')
			->get()
			->toArray();

		$data_users_data = User::join('roles', function ($join) {
			$join->on('users.role_id', '=', 'roles.id');
		})
			
			->where('users.id', '=', base64_decode($reuest->edit_id))
			->select(
				'roles.id as role_id',
				// 'users.u_uname',
				'users.password',
				'users.email',
				'users.f_name',
				'users.m_name',
				'users.l_name',
				'users.number',
				'users.address',
				'users.taluka',
				'users.village',
				'users.id',
				'users.is_active'
			)->get()
			->toArray();

	$data_users_data = User::join('roles', function($join) {
						$join->on('users.role_id', '=', 'roles.id');
					})
					// ->join('roles_permissions', function($join) {
					// 	$join->on('users.id', '=', 'roles_permissions.user_id');
					// })
					->where('users.id','=',base64_decode($reuest->edit_id))
					// ->where('roles_permissions.is_active','=',true)
					// ->where('users.is_active','=',true)
					->select('roles.id as role_id',
							// 'users.u_uname',
							'users.password',
							'users.email',
							'users.f_name',
							'users.m_name',
							'users.l_name',
							'users.number',
							'users.address',
							'users.taluka',
							'users.village',
							'users.id',
							'users.is_active'
						)->get()
						->toArray();
						
		$data_users['data_users'] = $data_users_data[0];

		return $data_users;
	}

	// public function delete($request)
	// {
	// 	$user = User::where(['id' => $request->delete_id])
	// 		->update(['is_active' => false]);
	// 	// $rolesPermissions = RolesPermissions::where(['user_id' => $request->delete_id])
	// 	// 	->update(['is_active' => false]);

	// 	return "ok";
	// }

	public function delete($id)
    {
        try {
            $user = User::find($id);
            if ($user) {
              
                $user->delete();
               
                return $user;
            } else {
                return null;
            }
        } catch (\Exception $e) {
            return $e;
        }
    }

	public function getById($id)
	{
		try {
			$user = User::leftJoin('tbl_area as taluka_user', 'users.taluka', '=', 'taluka_user.location_id')
				->leftJoin('tbl_area as village_user', 'users.village', '=', 'village_user.location_id')
				->where('users.id', $id)
				->select('users.f_name','users.m_name','users.l_name','users.email','users.number',
				'users.address','taluka_user.name as taluka','village_user.name as village','users.other_pass')
				->first();
	
			if ($user) {
				return $user;
			} else {
				return null;
			}
		} catch (\Exception $e) {
			return [
				'msg' => $e->getMessage(),
				'status' => 'error'
			];
		}
	}

	public function updateOneUser($request){
        try {
            $user = User::find($request); // Assuming $request directly contains the ID

            // Assuming 'is_active' is a field in the userr model
            if ($user) {
                $is_active = $user->is_active === 1 ? 0 : 1;
                $user->is_active = $is_active;
                $user->save();

                return [
                    'msg' => 'User updated successfully.',
                    'status' => 'success'
                ];
            }

            return [
                'msg' => 'User not found.',
                'status' => 'error'
            ];
        } catch (\Exception $e) {
            return [
                'msg' => 'Failed to update User.',
                'status' => 'error'
            ];
        }
    }

	public function getProfile()
	{
		$user_detail = User::where('is_active', true)
			->where('id', session()->get('user_id'))
			->select('id', 'f_name', 'm_name', 'l_name', 'email', 'password', 'number','user_profile')
			->first();
		return $user_detail;
	}


	public function updateProfile($request)
	{
		try {
			
			$return_data = array();
			$otp = rand(6, 999999);

			
			$update_data = [
				'f_name' => $request->f_name,
				'm_name' => $request->m_name,
				'l_name' => $request->l_name,
				'number' => $request->number,
				'email' => $request->email,
				
			];
			
			if (isset($return_data['user_profile'])) {
				$previousUserProfile = $update_data->user_profile;
			}
			// if ($request->hasFile('user_profile')) {
			// 	$profileImage = $request->file('user_profile');
			// 	$newImagePathOrFilename = $profileImage->store('profile_images');
			// 	$update_data['user_profile'] = $newImagePathOrFilename;
			// }

			// if (($request->number != $request->old_number) && !isset($request->password)) {
				// $this->sendOTPEMAIL($otp, $request);

				// dd($request->number, $request->old_number);
				
				// info("only mobile change");
				// $return_data['password_change'] = 'no';
				// // $update_data['otp'] = $otp;
				// $return_data['mobile_change'] = 'yes';
				// $return_data['user_id'] = $request->edit_user_id;
				// $return_data['new_mobile_number'] = $request->number;
				// $return_data['u_password_new'] = '';
				// $return_data['msg'] = "OTP sent on registered on email";
				// $return_data['msg_alert'] = "green";

			// }

			// if ((isset($request->password) && $request->password !== '') && ($request->number == $request->old_number)) {
			// 	info("only password change");
			// 	// $update_data['password'] = bcrypt($request->password);
			// 	$return_data['password_change'] = 'yes';
			// 	$return_data['mobile_change'] = 'no';
			// 	$update_data['otp'] = $otp;
			// 	$return_data['user_id'] = $request->edit_user_id;
			// 	$return_data['u_password_new'] = bcrypt($request->password);
			// 	$return_data['new_mobile_number'] = '';
			// 	$return_data['msg'] = "OTP sent on registered on email";
			// 	$return_data['msg_alert'] = "green";

			// 	$this->sendOTPEMAIL($otp, $request);
			// }

			// if ((isset($request->password) && $request->password !== '') && ($request->number != $request->old_number)) {
			// 	info("only password and mobile number changed");
			// 	$update_data['otp'] = $otp;
			// 	$return_data['u_password_new'] = bcrypt($request->password);
			// 	$return_data['password_change'] = 'yes';
			// 	$return_data['mobile_change'] = 'yes';
			// 	$return_data['user_id'] = $request->edit_user_id;
			// 	$return_data['new_mobile_number'] = $request->number;
			// 	$return_data['msg'] = "OTP sent on registered on email";
			// 	$return_data['msg_alert'] = "green";

			// 	$this->sendOTPEMAIL($otp, $request);
			// }
			
			User::where('id', $request->edit_user_id)->update($update_data);

			$user_data = User::find($request->edit_user_id);
			$previousUserProfile = $user_data->user_profile;
			$last_insert_id = $user_data->id;

            $return_data['last_insert_id'] = $last_insert_id;
            $return_data['user_profile'] = $previousUserProfile;

		// dd($last_insert_id);
		// die();

			return $return_data;

			
		} catch (\Exception $e) {
			info($e);
		}

		// return $update_data;
	}

	public function sendOTPEMAIL($otp, $request) {
		try {
			$email_data = [
				'otp' => $otp,
			];
			$toEmail = $request->email;
			$senderSubject = 'Disaster Management OTP ' . date('d-m-Y H:i:s');
			$fromEmail = env('MAIL_USERNAME');
			Mail::send('admin.email.emailotp', ['email_data' => $email_data], function ($message) use ($toEmail, $fromEmail, $senderSubject) {
				$message->to($toEmail)->subject($senderSubject);
				$message->from($fromEmail, 'Disaster Management OTP');
			});
			return 'ok';
		} catch (\Exception $e) {
			info($e);
		}
	}
	
	// public function checkEmailExists(Request $request) {
    //     $userEmail = $request->input('email');
      
    //     $user = User::where('email', $userEmail)->first();
      
    //     if ($user) {
    //       return response()->json([
    //         'success' => false,
    //         'message' => 'This Email already exists.',
    //       ]);
    //     } else {
    //       return response()->json([
    //         'success' => true,
    //         'message' => 'This Email does not exist.',
    //       ]);
    //     }
    // }
}