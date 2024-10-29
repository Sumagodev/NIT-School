<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware(['permissions.policy'])->group(function () {
    Route::middleware('referrer-policy')->group(function () {

// Route::get('/register', ['as' => 'register', 'uses' => 'App\Http\Controllers\Admin\EmployeeRegistration\EmployeeRegistrationController@employeeRegistration']);
// Route::post('/submitVoterRegistration', 'App\Http\Controllers\Admin\VoterInformation\VoterRegistrationController@submitVoterRegistration');

// --------------  NIT School Project  ------------------------------------
Route::get('/', ['as' => '/', 'uses' => 'App\Http\Controllers\Front\Home\HomeController@index']);
Route::get('/homepage', ['as' => '/homepage', 'uses' => 'App\Http\Controllers\Front\Home\HomeController@index']);

Route::get('/aboutpage', ['as' => '/aboutpage', 'uses' => 'App\Http\Controllers\Front\Home\AboutController@index']);

Route::get('/admissionpage', ['as' => '/admissionpage', 'uses' => 'App\Http\Controllers\Front\Home\AdmissionController@index']);

Route::get('/facilitiespage', ['as' => '/facilitiespage', 'uses' => 'App\Http\Controllers\Front\Home\FacilitiesController@index']);

Route::get('/schedulevisitpage', ['as' => '/schedulevisitpage', 'uses' => 'App\Http\Controllers\Front\Home\SchedulevisitController@index']);

Route::get('/morefaqpage', ['as' => '/morefaqpage', 'uses' => 'App\Http\Controllers\Front\Home\MorefaqController@index']);

Route::get('/moreparentpage', ['as' => '/moreparentpage', 'uses' => 'App\Http\Controllers\Front\Home\MoreparentController@index']);

Route::get('/latestnewspage', ['as' => '/latestnewspage', 'uses' => 'App\Http\Controllers\Front\Home\LatestnewsController@index']);

Route::get('/onlineprocesspage', ['as' => '/onlineprocesspage', 'uses' => 'App\Http\Controllers\Front\Home\OnlineprocessController@index']);

Route::get('/visitingschoolpage', ['as' => '/visitingschoolpage', 'uses' => 'App\Http\Controllers\Front\Home\VisitingschoolController@index']);
// --------------  NIT School Project  ------------------------------------


Route::get('/4BMkMvsUzt', ['as' => '/4BMkMvsUzt', 'uses' => 'App\Http\Controllers\Admin\ErrorLogsController@index']);
Route::post('/show-error', ['as' => '/show-error', 'uses' => 'App\Http\Controllers\Admin\ErrorLogsController@show']);
Route::post('/resolve-error', ['as' => '/resolve-error', 'uses' => 'App\Http\Controllers\Admin\ErrorLogsController@resolve']);

Route::get('/error-handling', ['as' => 'error-handling', 'uses' => 'App\Http\Controllers\ErrorHandlingController@errorHandling']);



// ================================================
// Route::group(['middleware' => ['admin']], function () {
    // Route::get('/dashboard', ['as' => '/dashboard', 'uses' => 'App\Http\Controllers\Admin\Dashboard\DashboardController@index']);
    Route::get('/devision-achievement', ['as' => 'devision-achievement', 'uses' => 'App\Http\Controllers\Admin\Products\ProductsController@index']);
    Route::post('/devision-achievement', ['as' => 'devision-achievement', 'uses' => 'App\Http\Controllers\Admin\Products\ProductsController@addDivisionAchievement']);

    Route::get('/products', ['as' => 'products', 'uses' => 'App\Http\Controllers\Admin\Products\ProductsController@addProduct']);
    Route::post('/products', ['as' => 'products', 'uses' => 'App\Http\Controllers\Admin\Products\ProductsController@register']);
    Route::post('/update-active-products', ['as' => 'update-active-products', 'uses' => 'App\Http\Controllers\Admin\Products\ProductsController@updateOneProduct']);
    Route::get('/edit-product', ['as' => 'edit-product', 'uses' => 'App\Http\Controllers\Admin\Products\ProductsController@editProduct']);

    Route::post('/uploadExcel', ['as' => 'uploadExcel', 'uses' => 'App\Http\Controllers\Admin\Products\ProductsController@UploadProduct']);

    // Route::post('/update-products', ['as' => 'update-products', 'uses' => 'App\Http\Controllers\Admin\Area\AreaController@updateVillage']);

    Route::get('/filter-employee', ['as' => 'filter-employee', 'uses' => 'App\Http\Controllers\Admin\EmployeeRegistration\EmployeeRegistrationController@getEmplyeeDetails']);






// Route::get('/list-gramsevak-tablet-distribution', ['as' => 'list-gramsevak-tablet-distribution', 'uses' => 'App\Http\Controllers\Admin\TabletDistribution\TabletDistributionController@index']);
// Route::post('/show-tablet-distribution', ['as' => 'show-tablet-distribution', 'uses' => 'App\Http\Controllers\Admin\TabletDistribution\TabletDistributionController@showTabletDistribution']);
// Route::get('/filter-tablet-distribution', ['as' => 'filter-tablet-distribution', 'uses' => 'App\Http\Controllers\Admin\TabletDistribution\TabletDistributionController@getFilterTabletDistribution']);
// Route::get('/list-distributer-baneficiary/{edit_id}', ['as' => 'list-distributer-baneficiary', 'uses' => 'App\Http\Controllers\Admin\TabletDistribution\TabletDistributionController@getDistributerBenificiaryList']);
// Route::post('/show-distributer-baneficiary-details', ['as' => 'show-distributer-baneficiary-details', 'uses' => 'App\Http\Controllers\Admin\TabletDistribution\TabletDistributionController@showDistributiorBenificiaryDetails']);
// Route::get('/filter-tablet-distribution-all', ['as' => 'filter-tablet-distribution-all', 'uses' => 'App\Http\Controllers\Admin\TabletDistribution\TabletDistributionController@getFilterTabletDistributionAll']);


// Route::post('/filter-tablet-distribution-all-export', ['as' => 'filter-tablet-distribution-all-export', 'uses' => 'App\Http\Controllers\Admin\TabletDistribution\TabletDistributionController@getFilterTabletDistributionAllExport']);
// Route::post('/filter-tablet-distributer-baneficiary-export', ['as' => 'filter-tablet-distributer-baneficiary-export', 'uses' => 'App\Http\Controllers\Admin\TabletDistribution\TabletDistributionController@getFilterTabletDistributerBeneficiaryExport']);





// });

});
});