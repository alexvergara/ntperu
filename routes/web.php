<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::resource('product-types', App\Http\Controllers\ProductTypeController::class);
Route::resource('employee-types', App\Http\Controllers\EmployeeTypeController::class);
Route::resource('categories', App\Http\Controllers\CategoryController::class);
Route::resource('companies', App\Http\Controllers\CompanyController::class);
Route::resource('departments', App\Http\Controllers\DepartmentController::class);
Route::resource('employees', App\Http\Controllers\EmployeeController::class);
Route::resource('expenses', App\Http\Controllers\ExpenseController::class);
Route::resource('invoices', App\Http\Controllers\InvoiceController::class);
Route::resource('messages', App\Http\Controllers\MessageController::class);
Route::resource('notifications', App\Http\Controllers\NotificationController::class);
Route::resource('orders', App\Http\Controllers\OrderController::class);
Route::resource('payments', App\Http\Controllers\PaymentController::class);
Route::resource('products', App\Http\Controllers\ProductController::class);
Route::resource('projects', App\Http\Controllers\ProjectController::class);
Route::resource('suppliers', App\Http\Controllers\SupplierController::class);
Route::resource('tasks', App\Http\Controllers\TaskController::class);
Route::resource('attendances', App\Http\Controllers\AttendanceController::class);
Route::resource('purchase-orders', App\Http\Controllers\PurchaseOrderController::class);