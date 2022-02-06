<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('companies', App\Http\Controllers\CompanyController::class);


Route::resource('departments', App\Http\Controllers\DepartmentController::class);


Route::resource('masterSchemas', App\Http\Controllers\MasterSchemaController::class);


Route::resource('organizationals', App\Http\Controllers\OrganizationalController::class);


Route::resource('employees', App\Http\Controllers\EmployeeController::class);


Route::resource('schemaSchedules', App\Http\Controllers\SchemaScheduleController::class);


Route::resource('schemaLeaves', App\Http\Controllers\SchemaLeaveController::class);


Route::resource('shiftSchedules', App\Http\Controllers\ShiftScheduleController::class);


Route::resource('salaries', App\Http\Controllers\SalariesController::class);

Route::get('/data/deparment/{id}', [App\Http\Controllers\EmployeeController::class, 'getDepartment']);

Route::get('/data/organizational/{id}', [App\Http\Controllers\OrganizationalController::class, 'getOrganizational']);
