<?php

declare(strict_types=1);

use App\Http\Controllers\DBTestController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\MainController as AdminMainController;
use App\Http\Controllers\Admin\DrugController as AdminDrugController;
use App\Http\Controllers\Admin\MessageController as AdminMessageController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\MessageController;
use \App\Http\Controllers\ClinicsController;
use \App\Http\Controllers\Doctor_reviewsController;
use \App\Http\Controllers\DoctorsController;
use \App\Http\Controllers\Medical_cardController;
use \App\Http\Controllers\MeetingsController;
use \App\Http\Controllers\OrganizationsController;
use \App\Http\Controllers\PatientsController;
use \App\Http\Controllers\Payment_statusesController;
use \App\Http\Controllers\Payment_typesController;
use \App\Http\Controllers\PaymentsController;
use \App\Http\Controllers\PharmaciesController;
use \App\Http\Controllers\ReceiptsController;
use \App\Http\Controllers\ServicesController;
use \App\Http\Controllers\Sick_listsController;
use \App\Http\Controllers\SpecialitiesController;
use \App\Http\Controllers\Video_callsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [MainController::class, 'index'])->name('main');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], static function () {
    Route::get('/', [AdminIndexController::class, 'index'])->name('admin');
    Route::resource('main', AdminMainController::class);
    Route::resource('drugs', AdminDrugController::class);
    Route::resource('messages', AdminMessageController::class);
    Route::resource('users', AdminUserController::class);
});

Route::get('/drugs', [DrugController::class, 'index'])->name('drugs');
Route::get('/messages', [MessageController::class, 'index'])->name('messages');
Route::get('/clinics', [ClinicsController::class, 'index'])->name('clinics');
Route::get('/doctor_reviews', [Doctor_reviewsController::class, 'index'])->name('doctor_reviews');
Route::get('/doctors', [DoctorsController::class, 'index'])->name('doctors');
Route::get('/medical_cards', [Medical_cardController::class, 'index'])->name('medical_cards');
Route::get('/meetings', [MeetingsController::class, 'index'])->name('meetings');
Route::get('/organizations', [OrganizationsController::class, 'index'])->name('organizations');
Route::get('/patients', [PatientsController::class, 'index'])->name('patients');
Route::get('/payment_statuses', [Payment_statusesController::class, 'index'])->name('payment_statuses');
Route::get('/payment_types', [Payment_typesController::class, 'index'])->name('payment_types');
Route::get('/payments', [PaymentsController::class, 'index'])->name('payments');
Route::get('/pharmacies', [PharmaciesController::class, 'index'])->name('pharmacies');
Route::get('/receipts', [ReceiptsController::class, 'index'])->name('receipts');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/sick_lists', [Sick_listsController::class, 'index'])->name('sick_lists');
Route::get('/specialities', [SpecialitiesController::class, 'index'])->name('specialities');
Route::get('/video_calls', [Video_callsController::class, 'index'])->name('video_calls');


Route::get('dbtest', DBTestController::class);
