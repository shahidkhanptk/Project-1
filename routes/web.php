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
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/branch-create', [BranchController::class, 'create'])->name('branch.create');
Route::POST('/branch-store/{id?}', [BranchController::class, 'store'])->name('branch.store');
Route::get('/branch-show', [BranchController::class, 'show'])->name('branch.show');

Route::get('/branch-edit/{id?}', [BranchController::class, 'edit'])->name('branch.edit');
Route::POST('/branch-update/{id?}', [BranchController::class, 'update'])->name('branch.update');

Route::get('/branch-amount', [BranchController::class, 'amount'])->name('branch.amount');
Route::post('/amount-show', [BranchController::class, 'amountShow'])->name('amount.show');

Route::POST('/amount-store', [BranchController::class, 'amountStore'])->name('amount.store');
Route::get('/branch-delete/{id?}', [BranchController::class, 'delete'])->name('branch.delete');
Route::get('/expense-donation', [BranchController::class, 'expensesDonation'])->name('expense.donation');

Auth::routes();

Route::get('/branch', [StaffController::class, 'index'])->name('branch.home');
Route::get('/staff-create', [StaffController::class, 'create'])->name('staff.create');
Route::POST('/staff-store', [StaffController::class, 'store'])->name('staff.store');

Route::get('/staff-show', [StaffController::class, 'show'])->name('staff.show');
Route::get('/add-expense', [StaffController::class, 'expenseDonation'])->name('add.expense');

Route::get('/branch-login', [BranchController::class, 'login'])->name('branch.login');
Route::POST('/login-store', [BranchController::class, 'loginStore'])->name('login.store');