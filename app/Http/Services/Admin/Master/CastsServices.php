<?php
namespace App\Http\Services\Admin\Master;

use App\Http\Repository\Admin\Master\CastsRepository;

use App\Casts;
use Carbon\Carbon;


class CastsServices{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct(){
        $this->repo = new CastsRepository();
    }
    public function getAll(){
        try {
            return $this->repo->getAll();
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function addAll($request) {
        try {
            $add_Maritalstatus = $this->repo->addAll($request);
            if ($add_Maritalstatus) {
                return ['status' => 'success', 'msg' => 'Cast Added Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => 'Cast Not Added.'];
            }  
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        }      
    }
    public function getById($id){
        try {
            return $this->repo->getById($id);
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function updateAll($request){
        try {
            $update_Maritalstatus = $this->repo->updateAll($request);
            if ($update_Maritalstatus) {
                return ['status' => 'success', 'msg' => 'Cast Updated Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => 'Cast Not Updated.'];
            }  
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        }      
    }
    public function deleteById($id){
        try {
            $delete = $this->repo->deleteById($id);
            if ($delete) {
                return ['status' => 'success', 'msg' => 'Deleted Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => ' Not Deleted.'];
            }  
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        } 
    }
   
    public function updateOne($id)
    {
        return $this->repo->updateOne($id);
    }


}