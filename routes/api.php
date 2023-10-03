<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AttendanceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/upload-attendance', [AttendanceController::class, 'uploadAttendance']);

Route::get('/show-attendance', [AttendanceController::class, 'showAttendance']);
Route::get('/group-by', [ApplicationController::class, 'groupByOwner']);
// locations (id, address , latitude , longitude , company_id)

// assets (id, asset_name , company_id )

// company (id, name )

// company_groups (id , company_id , group_name , company_group_id (optional), employee_id(optional) )

// Managers (id, first_name, last_name , company_id)

// Employess (id, first_name , last_name , company_id , company_group_id (optional))

// Poeple , (id, employee_id , manager_id)