<?php

use App\Http\Resources\DrugCollection;
use App\Models\Drug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DrugController;
use \App\Http\Controllers\DoctorsController;
use \App\Http\Resources\PharmacyCollection;
use \App\Models\Subjects\Pharmacy;
use \App\Http\Resources\DoctorsCollection;
use \App\Models\Subjects\Doctor;
use \App\QueryBuilders\DrugsQueryBuilder;
use \App\Http\Controllers\DoctorSpecialityController;
use \App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/drugs', function () {
    return DrugCollection::collection(Drug::all());
   // return DrugCollection::collection(DrugsQueryBuilder::getAll());
});

Route::get('/pharmacies', function () {
    return PharmacyCollection::collection(Pharmacy::all());
});

//Route::get('/doctors', function () {
 //   return DoctorsCollection::collection(Doctor::all());
//});
//Route::get('/doctors', [function () {
  //     return response(DoctorsController::class,200);
  // }]);

  Route::get('/doctors', [DoctorSpecialityController::class, 'getDoctorsWithSpeciality']);

  Route::post('/signIn/login/{login}/password/{password}/role/{role}', [AuthController::class, 'Auth'] );
//Route::get('drugs', function () {

//    return response(DrugController::class,200);

//});


