<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\VoucherController;
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
    return view('home');
})->name('home');
Route::get('login', [UserController::class, 'showFormLogin'])->name('login');
Route::post('login', [UserController::class, 'login'])->name('user.login');
Route::get('register', [UserController::class, 'showFormRegister'])->name('register');
Route::post('register', [UserController::class, 'register'])->name('user.register');

Route::middleware('auth')->group(function (){
    Route::get('logout', [UserController::class, 'logout'])->name('user.logout');
    Route::get('list', [VoucherController::class, 'list'])->name('voucher.list');
    Route::get('create', [VoucherController::class, 'showCreateForm'])->name('voucher.showCreateForm');
    Route::post('create', [VoucherController::class, 'create'])->name('voucher.create');
    Route::get('edit/{id}', [VoucherController::class, 'edit'])->name('voucher.edit');
    Route::post('edit/{id}', [VoucherController::class, 'update']);
    Route::get('destroy/{id}', [VoucherController::class, 'destroy'])->name('voucher.destroy');
    Route::get('detail/{id}', [VoucherController::class, 'detail'])->name('voucher.detail');
    Route::get('search', [VoucherController::class, 'search'])->name('voucher.search');
});
