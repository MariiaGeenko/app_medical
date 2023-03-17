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

Route::get('dbtest', DBTestController::class);
