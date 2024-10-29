<?php

namespace App\Http\Controllers\Front\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Http\Services\Website\IndexServices;
// use Session;

// use App\Models\ {
//     Index
// };

class AdmissionController extends Controller
{
    // public static $event_repository;
    public function __construct()
    {
        // $this->service = new IndexServices();  
        // $this->menu = getMenuItemsActivities();
        // $this->menuDepartment = getMenuItemsDepartment();
        // $this->menuFacility = getFacility();
    }

    public function index()
    {
        try {

            // $data_output = $this->service->index();
            return view('Front.pages.home.admission');
        } catch (\Exception $e) {
            return $e;
        }
    } 
         
}