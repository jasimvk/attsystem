<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckinController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;

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



Route::get('/', [EmployeeController::class, 'index'] );

Route::post ('/checkin', [EmployeeController::class, 'checkin'] );

Route::get('/manage-employees', [EmployeeController::class, 'manage'] );
Route::get('/listEmployees', [EmployeeController::class, 'emplists'] );
Route::get('/searchEmployees', [EmployeeController::class, 'search'] );
Route::get('/searchbyemployee', [EmployeeController::class, 'searchEmp'] );
Route::get('/employee-create', [EmployeeController::class, 'create'] );
Route::post('/employee-store', [EmployeeController::class, 'store'] );
Route::get('/employee-edit/{id}', [EmployeeController::class, 'edit'] );
Route::put('/employee-update/{id}', [EmployeeController::class, 'update'] );
Route::get('/employee-delete/{id}', [EmployeeController::class, 'destroy'] );




