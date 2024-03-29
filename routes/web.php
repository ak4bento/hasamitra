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

//Route::resource('schemaLeaves', App\Http\Controllers\SchemaLeaveController::class);

Route::resource('shiftSchedules', App\Http\Controllers\ShiftScheduleController::class);

Route::resource('salaries', App\Http\Controllers\SalariesController::class);

Route::get('salaries/type/company', [App\Http\Controllers\SalariesController::class, 'indexCompany'])->name('salaries.indexCompany');

Route::get('salaries/type/company/create', [App\Http\Controllers\SalariesController::class, 'create'])->name('salaries.indexCompany.create');

Route::get('salaries/type/organizational', [App\Http\Controllers\SalariesController::class, 'indexOrganizational'])->name('salaries.indexOrganizational');

Route::get('salaries/type/organizational/create', [App\Http\Controllers\SalariesController::class, 'create'])->name('salaries.indexOrganizational.create');

Route::get('/data/deparment/{id}', [App\Http\Controllers\EmployeeController::class, 'getDepartment']);

Route::get('/data/employee/{id}', [App\Http\Controllers\EmployeeController::class, 'getEmployee']);

Route::get('/data/organizational/{company}/{department}', [App\Http\Controllers\OrganizationalController::class, 'getOrganizational']);

Route::get('/data/salaries/organizational/{company}', [App\Http\Controllers\OrganizationalController::class, 'getSalariesOrganizational']);

Route::resource('admins', App\Http\Controllers\AdminController::class);

Route::get('attendances/export/', [App\Http\Controllers\AttendanceController::class, 'export'])->name('attendances.export');

Route::get('attendances/date/', [App\Http\Controllers\AttendanceController::class, 'date'])->name('attendances.date');

Route::get('attendances/report/', [App\Http\Controllers\AttendanceController::class, 'report'])->name('attendances.report');

Route::resource('attendances', App\Http\Controllers\AttendanceController::class);

Route::resource('schemaBreaks', App\Http\Controllers\SchemaBreakController::class);

Route::resource('submissions', App\Http\Controllers\SubmissionController::class);

Route::get('submission/received', [App\Http\Controllers\SubmissionController::class, 'indexReceived'])->name('submissions.received');

Route::get('submission/rejected', [App\Http\Controllers\SubmissionController::class, 'indexRejected'])->name('submissions.rejected');

Route::get('submission/canceled', [App\Http\Controllers\SubmissionController::class, 'indexCanceled'])->name('submissions.canceled');


Route::resource('acceptSalaries', App\Http\Controllers\AcceptSalariesController::class);

Route::resource('reportingEmployees', App\Http\Controllers\ReportingEmployeeController::class);
