<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => 'auth'], function()
{
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/branch-create', [BranchController::class, 'create'])->name('branch.create');
Route::POST('/branch-store/{id?}', [BranchController::class, 'store'])->name('branch.store');
Route::get('/branch-show', [BranchController::class, 'show'])->name('branch.show');
Route::get('/branch-edit/{id?}', [BranchController::class, 'edit'])->name('branch.edit');
Route::POST('/branch-update/{id}', [BranchController::class, 'update'])->name('branch.update');
Route::get('/branch-amount', [BranchController::class, 'amount'])->name('branch.amount');
Route::POST('/amount-store', [BranchController::class, 'amountStore'])->name('amount.store');
Route::get('/amount-show', [BranchController::class, 'amountShow'])->name('amount.show');
Route::get('/amount-delete/{id?}', [BranchController::class, 'amountDelete'])->name('amount.delete');
Route::get('/amount-edit/{id}', [BranchController::class, 'amountEdit'])->name('amount.edit');
Route::POST('/amount-update/{id}', [BranchController::class, 'amountUpdate'])->name('amount.update');
Route::get('/branch-delete/{id?}', [BranchController::class, 'delete'])->name('branch.delete');
Route::get('/expense', [BranchController::class, 'expense'])->name('expense');
Route::get('/donation', [BranchController::class, 'donation'])->name('donation');
Route::get('/staff', [BranchController::class, 'staff'])->name('staff.list');
});
Route::get('/branch-login', [BranchController::class, 'login'])->name('branch.login');
Route::POST('/login-store', [BranchController::class, 'loginStore'])->name('login.store');

Auth::routes();

Route::get('/branch', [StaffController::class, 'index'])->name('branch.home');
Route::get('/staff-create', [StaffController::class, 'create'])->name('staff.create');
Route::POST('/staff-store', [StaffController::class, 'store'])->name('staff.store');
Route::get('/staff-show', [StaffController::class, 'show'])->name('staff.show');
Route::get('/staff-delete/{id?}', [StaffController::class, 'delete'])->name('staff.delete');
Route::get('/add-expense', [StaffController::class, 'expense'])->name('add.expense');
Route::POST('/store-expense', [StaffController::class, 'storeExpense'])->name('store.expense');
Route::get('/add-donation', [StaffController::class, 'donation'])->name('add.donation');
Route::POST('/store-donation', [StaffController::class, 'storeDonation'])->name('store.donation');
Route::get('/show-expense', [StaffController::class, 'showExpense'])->name('show.expense');
Route::get('/show-donation', [StaffController::class, 'showDonation'])->name('show.donation');
Route::get('/staff-edit/{id}', [StaffController::class, 'staffEdit'])->name('staff.edit');
Route::POST('/staff-update/{id}', [StaffController::class, 'staffUpdate'])->name('staff.update');

