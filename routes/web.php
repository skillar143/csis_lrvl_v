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
    return view('auth.login');
});




// auth route for all users
Route::group(['middleware' => ['auth']],function(){
    route::get('/dashboard', [App\Http\Controllers\User\UserController::class, 'login'])->name('dashboard');
});


// for admin
Route::group(['middleware' => ['auth', 'role:admin']],function(){

    Route::prefix('/Program')->group(function(){
     // admin subject
     Route::prefix('/Subject')->group(function(){
        Route::get('/', [App\Http\Controllers\Admin\SubjectController::class, 'index'])->name('subject.index');
        Route::post('/Add', [App\Http\Controllers\Admin\SubjectController::class, 'store'])->name('subject.store');
        Route::put('/Update/{id}', [App\Http\Controllers\Admin\SubjectController::class, 'update'])->name('subject.update');
        Route::delete('/Delete/{id}',[App\Http\Controllers\Admin\SubjectController::class, 'destroy'])->name('subject.destroy');   
     });

     // admin course
     Route::prefix('/Course')->group(function(){
        Route::get('/', [App\Http\Controllers\Admin\ProgramController::class, 'index'])->name('course.index');
        Route::post('/Add', [App\Http\Controllers\Admin\ProgramController::class, 'store'])->name('course.store');
        Route::put('/Update/{id}', [App\Http\Controllers\Admin\ProgramController::class, 'update'])->name('course.update');
        Route::delete('/Delete/{id}',[App\Http\Controllers\Admin\ProgramController::class, 'destroy'])->name('course.destroy'); 
     });
    });

    // admin faculty
    Route::prefix('/Faculty')->group(function(){
        Route::get('/', [App\Http\Controllers\Admin\FacultyController::class, 'index'])->name('admin.faculty');
        Route::post('/Add', [App\Http\Controllers\Admin\FacultyController::class, 'store'])->name('faculty.store');
        Route::put('/Update/{id}', [App\Http\Controllers\Admin\FacultyController::class, 'update'])->name('faculty.update');
        Route::delete('/Delete/{id}',[App\Http\Controllers\Admin\FacultyController::class, 'destroy'])->name('faculty.destroy'); 

    });



});

require __DIR__.'/auth.php';

Auth::routes([
    'register' => false,
]);