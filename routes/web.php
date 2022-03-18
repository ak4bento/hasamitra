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
Route::post('/home', [App\Http\Controllers\HomeController::class, 'store'])->name('home.store');

Route::resource('companies', App\Http\Controllers\CompanyController::class);


Route::resource('departments', App\Http\Controllers\DepartmentController::class);


Route::resource('masterSchemas', App\Http\Controllers\MasterSchemaController::class);


Route::resource('organizationals', App\Http\Controllers\OrganizationalController::class);


Route::resource('employees', App\Http\Controllers\EmployeeController::class);
Route::get('employees/approve/{id}/edit', [App\Http\Controllers\EmployeeController::class, 'approve'])->name('employees.approve');
Route::patch('employees/approve/{id}', [App\Http\Controllers\EmployeeController::class, 'approveUpdate'])->name('employees.approveUpdate');

Route::resource('schemaSchedules', App\Http\Controllers\SchemaScheduleController::class);


Route::resource('schemaLeaves', App\Http\Controllers\SchemaLeaveController::class);


Route::resource('shiftSchedules', App\Http\Controllers\ShiftScheduleController::class);


Route::resource('salaries', App\Http\Controllers\SalariesController::class);

Route::get('/data/deparment/{id}', [App\Http\Controllers\EmployeeController::class, 'getDepartment']);

Route::get('/data/employee/{id}', [App\Http\Controllers\EmployeeController::class, 'getEmployee']);

Route::get('/data/organizational/{id}', [App\Http\Controllers\OrganizationalController::class, 'getOrganizational']);


Route::resource('admins', App\Http\Controllers\AdminController::class);


Route::resource('attendances', App\Http\Controllers\AttendanceController::class);
