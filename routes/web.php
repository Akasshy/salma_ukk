<?php

use App\Http\Controllers\AssessorController;
use App\Http\Controllers\CompentencyStandardController;
use App\Http\Controllers\CompetencyElementController;
use App\Http\Controllers\ExaminationController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Models\CompentencyStandard;
use App\Models\Student;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;
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


// Route::get(fung)

Route::get('/',[UserController::class, 'login']);
Route::post('/auth',[UserController::class, 'authentikasi']);

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});


Route::middleware(['status_login'])->group(function () {

    Route::get('admin',[UserController::class, 'dashboard']);
    Route::get('/logout',[UserController::class, 'logout']);
    Route::get('/user',[UserController::class, 'show']);

    Route::get('/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('/user/update/{id}',[UserController::class, 'update']);
    Route::get('user/delete/{id}', [UserController::class, 'delete']);
    Route::get('/user/profil',[UserController::class, 'profil']);

    Route::get('/user/create',[UserController::class, 'create']);
    Route::post('/add/user',[UserController::class, 'adduser']);
    Route::get('/createassessor', [AssessorController::class, 'createassessor']);

    Route::get('/admin/create',[UserController::class, 'admincreate']);
    Route::get('/admin/edit/{id}', [UserController::class, 'editadmin']);
    Route::post('/admin/update/{id}',[UserController::class, 'updateadmin']);
    Route::get('admin/delete/{id}', [UserController::class, 'deleteadmin']);




    Route::get('admin/student',[UserController::class, 'student']);
    Route::get('admin/assessor',[UserController::class, 'assessor']);


    Route::get('profil', [UserController::class, 'profil']);
    Route::get('profil-create',[UserController::class, 'profilcreate']);
    Route::post('profil/update/{id}', [UserController::class, 'profilupdate']);

    Route::get('/major',[MajorController::class, 'show']);
    Route::get('/createmajor', [MajorController::class, 'createmajor']);
    Route::post('/major/create', [MajorController::class, 'add']);
    Route::get('/major/update/{id}', [MajorController::class, 'editmajor']);
    Route::post('/major/update/{id}',[MajorController::class, 'updatemajor']);
    Route::get('/major/delete/{id}', [MajorController::class, 'deletemajor']);

    Route::get('/kompetensistandar', [CompentencyStandardController::class, 'showkomp']);
    Route::get('/createkomp', [CompentencyStandardController::class, 'createkomp']);
    Route::post('/komps-create', [CompentencyStandardController::class, 'addkomp']);
    Route::get('/komps/update/{id}', [CompentencyStandardController::class, 'editkomp']);
    Route::post('/komps-update/{id}',[CompentencyStandardController::class, 'updatekomp']);
    Route::get('/komps/delete/{id}', [CompentencyStandardController::class, 'deletekomp']);


    Route::get('/assessor',[AssessorController::class, 'showassessor']);
    // Route::post('/assessor/create', [AssessorController::class, 'adduser']);
    Route::get('/assessor/update/{id}', [AssessorController::class, 'editassessor']);
    Route::post('/assessor/update/{id}',[AssessorController::class, 'updateassessor']);
    Route::get('/assessor/delete/{id}', [AssessorController::class, 'deleteassessor']);


    Route::get('/kompetensielement', [CompetencyElementController::class, 'showkomple']);
    Route::get('/createkomple', [CompetencyElementController::class, 'createkomple']);
    Route::post('/komple-create', [CompetencyElementController::class, 'addkomple']);
    Route::get('/komple/update/{id}', [CompetencyElementController::class, 'editkomple']);
    Route::post('/komple/update/{id}',[CompetencyElementController::class, 'updatekomple']);
    Route::get('/komple/delete/{id}', [CompetencyElementController::class, 'deletekomple']);

    // Route::get('/examination', [ExaminationController::class, 'showexamination']);
    // Route::get('/createexam', [ExaminationController::class, 'createexamination']);
    // Route::post('/exam-create', [ExaminationController::class, 'addexamination']);
    // Route::get('/exam/update/{id}', [ExaminationController::class, 'editexamination']);
    // Route::post('/exam/update/{id}',[ExaminationController::class, 'updateexamination']);
    // Route::get('/exam/delete/{id}', [ExaminationController::class, 'deleteexamination']);

    Route::get('/melihathasilujian', [StudentController::class, 'showstudent']);


    Route::get('/pilih/standar', [ExaminationController::class, 'showstandar']);
    Route::get('/pilih/siswa/{id}', [ExaminationController::class, 'showsiswa']);






    // Route::get('/daftar', [ExaminationController::class, 'showdaftar']);
    // Route::get('/daftarcreate', [ExaminationController::class, 'createdaftar']);

    Route::get('/add', [MajorController::class, 'tes']);


    Route::get('/pdf', [StudentController::class, 'showpdf']);


});
