<?php
namespace App\Http\Repository\Admin\Master;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
// use Session;
use App\Models\ {
	Casts
};

class CastsRepository{
// 	public function getAll(){
//         try {
//             return Casts::all();
//         } catch (\Exception $e) {
//             return $e;
//         }
//     }

    public function getAll(){
        try {
            return Casts::where('is_deleted', '0')->get();  // Fetch only records where is_deleted is 0
        } catch (\Exception $e) {
            return $e;
        }
    }
	public function addAll($request){
        try {
            $maritalstatus_data = new Casts();
            $maritalstatus_data->cast_name = $request['cast_name'];
            $maritalstatus_data->save();       
                
            return $maritalstatus_data;

        } catch (\Exception $e) {
            return [
                'msg' => $e,
                'status' => 'error'
            ];
        }
    }
    public function getById($id){
        try {
            $maritalstatus = Casts::find($id);
            if ($maritalstatus) {
                return $maritalstatus;
            } else {
                return null;
            }
        } catch (\Exception $e) {
            return $e;
            return [
                'msg' => 'Failed to get by Id Incident Type.',
                'status' => 'error'
            ];
        }
    }
    public function updateAll($request){
        try {
            $maritalstatus_data = Casts::find($request->id);
            
            if (!$maritalstatus_data) {
                return [
                    'msg' => 'Cast not found.',
                    'status' => 'error'
                ];
            }
        // Store the previous image names
            $maritalstatus_data->cast_name = $request['cast_name'];
            // $gender_data->marathi_title = $request['marathi_title'];
            // $gender_data->url = $request['url'];
            $maritalstatus_data->save();        
        
            return [
                'msg' => 'Cast updated successfully.',
                'status' => 'success'
            ];
        } catch (\Exception $e) {
            return $e;
            return [
                'msg' => 'Failed to update Cast.',
                'status' => 'error'
            ];
        }
    }

    // public function deleteById($id) {
    //     try {
    //         $maritalstatus = Casts::find($id);
    //         if ($maritalstatus) {
    //             $maritalstatus->delete();
                
    //             return $maritalstatus;
    //         } else {
    //             return null;
    //         }
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // }
    
    	public function deleteById($id)
{
    try {
        // Find the village by ID
        $cast = Casts::find($id);
        if ($cast) {
            // Set the is_delete, is_active, and is_new flags for the village
            $cast->is_active = '0'; // Assuming you want to deactivate it
            $cast->is_deleted = '1';    // Assuming you want to mark it as not new
            $cast->save();


            return $cast;
        } else {
            return null;
        }
    } catch (\Exception $e) {
        return $e;
    }
}
    public function updateOne($request){
        try {
            $slide = Casts::find($request); // Assuming $request directly contains the ID

            // Assuming 'is_active' is a field in the Slider model
            if ($slide) {
                $is_active = $slide->is_active === 1 ? 0 : 1;
                $slide->is_active = $is_active;
                $slide->save();

                return [
                    'msg' => 'Slide updated successfully.',
                    'status' => 'success'
                ];
            }

            return [
                'msg' => 'Slide not found.',
                'status' => 'error'
            ];
        } catch (\Exception $e) {
            return [
                'msg' => 'Failed to update slide.',
                'status' => 'error'
            ];
        }
    }
    
       
}