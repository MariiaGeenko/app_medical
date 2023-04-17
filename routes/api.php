<?php

declare(strict_types=1);

use App\Http\Controllers\Api\DoctorApiController;
use App\Http\Resources\DrugCollection;
use App\Models\Drug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DrugController;
use \App\Http\Resources\PharmacyCollection;
use \App\Models\Subjects\Pharmacy;
use \App\Http\Resources\DoctorsCollection;
use \App\Models\Subjects\Doctor;
use \App\QueryBuilders\DrugsQueryBuilder;
use \App\Http\Controllers\Api\PharmacyApiController;
use \App\Http\Controllers\Api\PatientApiController;
use \App\Http\Controllers\Api\AuthController;



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


Route::get('/doctors', [DoctorApiController::class, 'getDoctorsWithSpeciality']);

Route::get('/doctors/{id}/receipts', [DoctorApiController::class, 'getDoctorWithReceipts']);

Route::get('/doctors/{id}/patients', [DoctorApiController::class, 'getDoctorWithPatients']);

Route::post('/doctors/register/patient', [DoctorApiController::class, 'registerPatient']);

Route::get('/drugs', [PharmacyApiController::class, 'getDrugsWithPharmacy']);

Route::get('/pharmacies', [PharmacyApiController::class, 'getPharmaciesWithDrugs']);

Route::get('/pharmacies/receipts', [PharmacyApiController::class, 'getReceiptsForPharmacies']);

Route::get('/patients', [PatientApiController::class, 'index']);


Route::get('/patients/{id}', [PatientApiController::class, 'getPatientInfoSickList'])
  ->where( 'id', '\d+');

Route::get('/patients/{id}/receipts', [PatientApiController::class, 'getReceiptsWithPatient']);
//Route::post('/signIn', [AuthController::class, 'Auth'] );

//Route::get('/signIn/login/{login}/password/{password}/role/{role}', [AuthController::class, 'Auth'] );
//Route::get('/signIn/login/{login}/password/{password}/role/{role}', [AuthController::class, 'Auth'] );
//Route::post('/login', [AuthController::class, 'Auth'] );
//Route::post('/login/{login}/password/{password}/role/{role}', [AuthController::class, 'Auth'] );
  //Route::post('/signIn/login/{login}/password/{password}/role/{role}', [AuthController::class, 'Auth'] );
//Route::get('drugs', function () {


//Route::post('/signIn/login/{login}/password/{password}/role/{role}', [AuthController::class, 'Auth'] );