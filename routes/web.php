<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\vehicleController;
use App\Http\Controllers\VehiRouteController;
use App\Http\Controllers\parcelController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\wholesaleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Input;
use App\Models\vehicle;
use App\Models\parcel;
use App\Models\driver;

Route::get('/', function () {
    return view('welcome');
});
//navigation routes
Route::get('toregister',[VehiRouteController::class,'redirectToRegister']);
Route::get('home',[VehiRouteController::class,'home']); //1.URL 2.Function name
Route::get('edit',[VehiRouteController::class,'edit']);
Route::get('list',[VehiRouteController::class,'list']);
//routes for blade pages
Route::get('first',[vehicleController::class,'index']);
Route::post('add',[vehicleController::class,'add']);
Route::get('list',[vehicleController::class,'show']);
Route::get('edit',[vehicleController::class,'list']);
Route::get('delete/{id}',[vehicleController::class,'delete']);
Route::get('edit/{id}',[vehicleController::class,'showData']);
Route::post('edit',[vehicleController::class,'update']);

//search function
Route::any ( '/search', function () {
    $q = Request::get ( 'q' );
    $vehicle = vehicle::where ( 'vehicle_type', 'LIKE', '%' . $q . '%' )->orWhere ( 'vehicle_num', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $vehicle ) > 0)
        return view ( 'transport.welcome' )->withDetails ( $vehicle )->withQuery ( $q );
    else
        return view ( 'transport.welcome' )->withMessage ( 'No Details found. Try to search again !' );
} );

//Parcel Routes
Route::get('parcelindex',[parcelController::class,'parcelindex']);
Route::post('newParcel',[parcelController::class,'newParcel']);
Route::get('parcelList',[parcelController::class,'parcelshow']);
Route::get('parcelEdit',[parcelController::class,'parcelList']);
Route::get('pdelete/{id}',[parcelController::class,'Pdelete']);
Route::get('parcelEdit/{id}',[parcelController::class,'PshowData']);
Route::post('parcelEdit',[parcelController::class,'updateParcel']);

//route for driver 
Route::get('drivers', [DriverController::class, 'index']);
Route::get('add-driver', [DriverController::class, 'create']);
Route::post('add-driver', [DriverController::class, 'store']);
Route::get('edit-driver/{id}', [DriverController::class, 'edit']);
Route::put('update-driver/{id}', [DriverController::class, 'update']);
Route::delete('delete-driver/{id}', [DriverController::class, 'destroy']);


//route for wholesale
Route::get('wholesalelist',[wholesaleController::class,'retrieve']);

//route for report 
Route::get('/report', [HomeController::class, 'index'])->name('home');
Route::get('daily-report', [HomeController::class, 'dailyReport'])->name('daily.report');


//route for PDF Generator
Route::get('pdf/preview', [PDFController::class, 'preview'])->name('pdf.preview');
Route::get('pdf/generate', [PDFController::class, 'generatePDF'])->name('pdf.generate');

//Route for inner table join
Route::get('inner-join',[parcelController::class,'innerJoinCaluse'])->name('post.innerjoin');
