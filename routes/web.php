<?php

declare(strict_types=1);

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;



use App\Http\Controllers\DBTestController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\MainController as AdminMainController;
use App\Http\Controllers\Admin\DrugController as AdminDrugController;
use App\Http\Controllers\Admin\MessageController as AdminMessageController;
use App\Http\Controllers\Admin\ClinicController as AdminClinicController;
use App\Http\Controllers\Admin\DoctorController as AdminDoctorController;
use App\Http\Controllers\Admin\Doctor_reviewController as AdminDoctor_reviewController;
use App\Http\Controllers\Admin\MeetingController as AdminMeetingController;
use App\Http\Controllers\Admin\OrganizationController as AdminOrganizationController;
use App\Http\Controllers\Admin\PatientController as AdminPatientController;
use App\Http\Controllers\Admin\PharmacyController as AdminPharmacyController;
use App\Http\Controllers\Admin\ReceiptController as AdminReceiptController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\SpecialityController as AdminSpecialityController;
use App\Http\Controllers\Admin\Video_callController as AdminVideo_callController;

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
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group(['prefix' => 'admin', 'as' => 'admin.'], static function () {
        Route::get('/', [AdminIndexController::class, 'index'])->name('admin');
        Route::resource('main', AdminMainController::class);
        Route::resource('drugs', AdminDrugController::class);
        Route::resource('messages', AdminMessageController::class);
        Route::resource('clinics', AdminClinicController::class);
        Route::resource('doctors', AdminDoctorController::class);
        Route::resource('doctor_reviews', AdminDoctor_reviewController::class);
        Route::resource('meetings', AdminMeetingController::class);
        Route::resource('organizations', AdminOrganizationController::class);
        Route::resource('patients', AdminPatientController::class);
        Route::resource('pharmacies', AdminPharmacyController::class);
        Route::resource('receipts', AdminReceiptController::class);
        Route::resource('services', AdminServiceController::class);
        Route::resource('specialities', AdminSpecialityController::class);
        Route::resource('video_calls', AdminVideo_callController::class);

        Route::resource('users', AdminUserController::class);

    });
});

require __DIR__.'/auth.php';
