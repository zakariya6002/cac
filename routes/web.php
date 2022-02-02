<?php

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterStepTwo;
use App\Http\Controllers\Jobs\JobsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Apply\ApplyController;
use App\Http\Controllers\File\UploadController;
use App\Http\Controllers\Admin\NewUserController;
use App\Http\Controllers\Newbie\NewbieController;
use App\Http\Controllers\Applied\AppliedController;
use App\Http\Controllers\Students\LessonController;
use App\Http\Controllers\Teachers\CourseController;
use App\Http\Controllers\Sessions\SessionController;
use App\Http\Controllers\Subjects\SubjectController;

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


Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'role:student', 'prefix' => 'student', 'as' => 'student.'], function() {
        Route::resource('lessons', \App\Http\Controllers\Students\LessonController::class);
    });
   Route::group(['middleware' => 'role:teacher', 'prefix' => 'teacher', 'as' => 'teacher.'], function() {
       Route::resource('jobs', \App\Http\Controllers\Teachers\CourseController::class);
       Route::resource('apply', ApplyController::class);
       Route::resource('upload', UploadController::class);
   });
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
        Route::resource('jobs', JobsController::class);
        Route::resource('sessions', SessionController::class);
        Route::resource('subjects', SubjectController::class);
        Route::resource('applied',AppliedController::class);
        Route::resource('upload', UploadController::class);
    });
});

Route::group(['middleware' => ['auth','verified']], function() {
    Route::group(['middleware' => ['registration_completed']], function() {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });
    Route::get('register-step2' ,[RegisterStepTwo::class, 'create'])->name('step2.create');
    Route::post('register-step2' ,[RegisterStepTwo::class, 'store'])->name('step2.post');
    Route::get('/email', function () {
        Mail::to('zhassan6002@gmail.com')->send(new WelcomeMail);
        return new WelcomeMail();
    });
});

