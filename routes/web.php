<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentParentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudyYearController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\MaterialController;

use App\Http\Controllers\ResultController;

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

Route::resource("admin", AdminController::class);
Route::resource("manager", ManagerController::class);
Route::resource("studentparent", StudentParentController::class);
Route::resource("student", StudentController::class);
Route::resource("studyyear", StudyYearController::class);
Route::resource("grade", GradeController::class);
Route::resource("material", MaterialController::class);
Route::resource("teacher", TeacherController::class);
