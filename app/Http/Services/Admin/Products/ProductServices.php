<?php
namespace App\Http\Services\Admin\Products;

use App\Http\Repository\Admin\Products\ProductRepository;


use App\Models\
{ User };
use Carbon\Carbon;
use Config;
use Storage;

class ProductServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct() {
        $this->repo = new ProductRepository();
    }

    public function index() {
        $products_data = $this->repo->getProductsList();
        // dd($products_data);
        return $products_data;
    }

    public function getProducts() {
        $products_data = $this->repo->getProducts();
        // dd($products_data);
        return $products_data;
    }
    

    // public function register($request) {
    //    // $academicYear = 1;
    //     $chk_dup = $this->repo->checkDupCredentials($request);
    //     if(sizeof($chk_dup)>0)
    //     {
    //         return ['status'=>'failed','msg'=>'Registration Failed. The name has already been taken.'];
    //     }
    //     else
    //     {
    //         $user_register_id = $this->repo->register($request);
    //         return ['status'=>'success','msg'=>'User Data Added Successful.'];
    //     }
    // }

    public function register($request){
        try {

                $last_id = $this->repo->register($request);
                if($request['formtype'] == 'add'){
                if ($last_id) {
                    return ['status' => 'success', 'msg' => 'User Added Successfully.'];
                } else {
                    return ['status' => 'error', 'msg' => 'User get Not Added.'];
                }  
            }if($request['formtype'] == 'edit'){
                if ($last_id) {
                    return ['status' => 'success', 'msg' => 'User Edited Successfully.'];
                } else {
                    return ['status' => 'error', 'msg' => 'User get Not Edited.'];
                } 
            }    
            // }

        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
            }      
    }

    public function update($request) {
            $user_register_id = $this->repo->update($request);
            // dd($user_register_id);
            return ['status'=>'success','msg'=>'Data Updated Successful.'];
    }    

 
    

    public function delete($id){
        try {
            $delete = $this->repo->delete($id);
            if ($delete) {
                return ['status' => 'success', 'msg' => 'Deleted Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => ' Not Deleted.'];
            }  
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        } 
    }
   

 
    public function editProduct($request) {
        $data_product = $this->repo->editProduct($request);
        return $data_product;
    }


    

   

    public function updateOneProduct($id){
        // dd($this->repo->updateOneProduct($id));
        return $this->repo->updateOneProduct($id);
    }
    
    public function UploadProduct($request){
        try {

                $last_id = $this->repo->UploadProduct($request);
                if ($last_id) {
                    return ['status' => 'success', 'msg' => 'User Added Successfully.'];
                } else {
                    return ['status' => 'error', 'msg' => 'User get Not Added.'];
                }  
            
            // }

        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
            }      
    }

    public function addDivisionAchievement($request){
        try {

                $last_id = $this->repo->addDivisionAchievement($request);
                // if($request['formtype'] == 'add'){
                if ($last_id) {
                    return ['status' => 'success', 'msg' => 'User Added Successfully.'];
                } else {
                    return ['status' => 'error', 'msg' => 'User get Not Added.'];
                }  
            // }if($request['formtype'] == 'edit'){
            //     if ($last_id) {
            //         return ['status' => 'success', 'msg' => 'User Edited Successfully.'];
            //     } else {
            //         return ['status' => 'error', 'msg' => 'User get Not Edited.'];
            //     } 
            // }    
            // }

        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
            }      
    }
}