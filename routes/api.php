<?php

use App\Http\Resources\DrugCollection;
use App\Models\Drug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DrugController;

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
});

//Route::get('drugs', function () {

//    return response(DrugController::class,200);

//});


