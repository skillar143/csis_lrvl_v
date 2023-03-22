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
        // admin course
    Route::get('/Course', [App\Http\Controllers\Admin\ProgramController::class, 'index'])->name('course.index');
    Route::post('/Cousre/Add', [App\Http\Controllers\Admin\ProgramController::class, 'store'])->name('course.store');

    // admin subject
    Route::get('/Subject', [App\Http\Controllers\Admin\SubjectController::class, 'index'])->name('subject.index');
    Route::post('/Subject/Add', [App\Http\Controllers\Admin\SubjectController::class, 'store'])->name('subject.store');


        // admin faculty
    Route::get('/Faculty', [App\Http\Controllers\Admin\FacultyController::class, 'index'])->name('admin.faculty');


    });

});

require __DIR__.'/auth.php';
