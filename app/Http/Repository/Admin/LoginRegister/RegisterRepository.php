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
	KaizenEmpDetails,
	KaizenManagmentDetails
};
use Illuminate\Support\Facades\Mail;

class RegisterRepository
{

	public function getUsersList() {
        $data_users = User::where('users.role_id', '2')
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
							// ->groupBy('gram_sevak_tablet_distribution.user_id')
							->get();
							// dd($data_users);
							foreach ($data_users as $key => $value) {
								$value->count_added =GramSevakTabletDistribution::where(['user_id'=>$value->id,'is_active'=>'1'])
								->count();
								// ->get();
							}

// dd($data_users);
		return $data_users;
	}


	// public function permissionsData()
	// {
	// 	$permissions = Permissions::where('is_active', true)
	// 		->select('id', 'route_name', 'permission_name', 'url')
	// 		->get()
	// 		->toArray();

	

	public function register($request)
	{
		// dd($request);
		$data =array();
		
		$user_data = new KaizenEmpDetails();
		$user_data->plant = $request['plant'];
		$user_data->employee_number = $request['employee_number'];
		$user_data->employee_name = $request['employee_name'];
		$user_data->team_member = $request['team_member'];
		$user_data->employee_department = $request['employee_department'];
		// $user_data->kaizen_type = $kaizenTypesString;
		$user_data->save();
		$last_insert_id = $user_data->id;

        $base64Image = $request['base64_image'];
        // // Decode base64 image string
        $image = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64Image));
        // // Save the image file to the 'uploads' directory
        $imageName = time() . '.png';  // You can use the original extension too
        $imagePath = public_path('uploads/' . $imageName);
        file_put_contents($imagePath, $image);

		$afterbase64Image = $request['afterbase64_image'];
        // // Decode base64 image string
        $afterimage = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $afterbase64Image));
        // // Save the image file to the 'uploads' directory
        $afterimageName = time() . 'after.png';  // You can use the original extension too
        $afteimagePath = public_path('uploads/' . $afterimageName);
        file_put_contents($afteimagePath, $afterimage);


		$kaizenTypes = $request['kaizen_type'];
		$kaizenTypesString = implode(',', $kaizenTypes);

		$Benefits = $request['benefits'];
		$BenefitsString = implode(',', $Benefits);

		$SelectDocuments = $request['select_documents'];
		$SelectDocumentString = implode(',', $SelectDocuments);
		
		
		$managment_data = new KaizenManagmentDetails();
		$managment_data->kaizen_emp_id = $last_insert_id;
		$managment_data->kaizen_type = $kaizenTypesString;
		$managment_data->kaizen_theme = $request['kaizen_theme'];
		$managment_data->before_kaizen_cond = $request['before_kaizen_cond'];
		$managment_data->want_before_kaizen_image = $request['want_before_kaizen_image'];
		$managment_data->before_kaizen_image = $base64Image;
		$managment_data->after_kaizen_cond = $request['after_kaizen_cond'];
		$managment_data->want_after_kaizen_image = $request['want_after_kaizen_image'];
		$managment_data->after_kaizen_image = $afterbase64Image;
		$managment_data->benefits = $BenefitsString;
		$managment_data->qualitative_details = $request['qualitative_details'];
		$managment_data->qualitative_details_annual = $request['qualitative_details_annual'];
		$managment_data->units = $request['units'];
		$managment_data->horizontal_deployement = $request['horizontal_deployement'];
		$managment_data->horizontal_deployment_text = $request['horizontal_deployment_text'];
		$managment_data->select_documents = $SelectDocumentString;
		$managment_data->save();
        return $last_insert_id;

		// $data['ImageName'] =$ImageName;
		// return $data;

	}

	 // Helper function to store base64 image
	//  private function storeBase64Image($base64Image, $imageName)
	//  {
	// 	 // Extract and decode the base64 image
	// 	 $image_parts = explode(";base64,", $base64Image);
	// 	 $image_type_aux = explode("image/", $image_parts[0]);
	// 	 $image_type = $image_type_aux[1];
	// 	 $image_base64 = base64_decode($image_parts[1]);
 
	// 	 // Generate a unique file name
	// 	 $fileName = uniqid($imageName . '_') . '.' . $image_type;
 
	// 	 // Define the file path to store the image
	// 	 $filePath = public_path('uploads/' . $fileName);
 
	// 	 // Store the image
	// 	 file_put_contents($filePath, $image_base64);
 
	// 	 return 'uploads/' . $fileName;
	//  }

}