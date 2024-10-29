<?php
namespace App\Http\Controllers\Api\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\ {
	Gender,
    Casts,
    TblArea,
    Wards
};

class AllMasterController extends Controller
    {
    public function getAllMasters(){
        try {
            $data = [];
            $data['gender'] = Gender::orderBy('id', 'asc')->get();
            $data['cast'] = Casts::orderBy('id', 'asc')->get();
            $data['wards'] = Wards::orderBy('ward_name', 'asc')->get();
            return response()->json(['status' => 'success', 'message' => 'All data retrieved successfully', 'data' => $data], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    public function getAllAreaMasters(){
        try {
            $data = [];
            $data['area'] = TblArea::orderBy('location_id', 'asc')->get();
            return response()->json(['status' => 'success', 'message' => 'All Area data retrieved successfully', 'data' => $data], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    public function getAllMastersUpdated(){
        try {
            $areas =  TblArea::where(['is_new'=> '1'])->get();

            $areas = $areas->map(function ($data) {
                return [
                    'id' => (string) $data->id,
                    'is_visible' => (string) $data->is_visible,
                    'location_id' => (string) $data->location_id,
                    'location_type' => (string) $data->location_type,
                    'name' => $data->name,
                    'parent_id' => (string) $data->parent_id,
                    'is_active' => $data->is_active ? "1" : "0",
                    'created_at' => $data->created_at,
                    'updated_at' => $data->updated_at,
                    'is_new' => (string) $data->is_new,
                ];
            })->toArray();

            
            return response()->json(['status' => 'success', 'message' => 'All data retrieved successfully', 'data' => $areas], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

}


