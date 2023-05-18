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
    route::put('/changepassword/{username}', [App\Http\Controllers\User\UserController::class, 'changePass'])->name('change.pass');
    Route::delete('/Delete/{id}',[App\Http\Controllers\User\UserController::class, 'destroy'])->name('user.destroy');

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

    //faculty_subjects
        Route::get('/Subject/{id}', [App\Http\Controllers\Admin\FacultyController::class, 'viewSubject'])->name('faculty.view');
        Route::post('/AddSubject/{id}', [App\Http\Controllers\Admin\FacultyController::class, 'storeSubject'])->name('faculty.storeSubject');
        Route::delete('/DelSubject/{f_id}/{s_id}/{p_id}',[App\Http\Controllers\Admin\FacultyController::class, 'destroySubject'])->name('faculty.destroySubject');
        Route::get('/get-subject-by-program/{program_id}', [App\Http\Controllers\Admin\FacultyController::class, 'getSubjectByProgram'])->name('get-subject-by-program');
    });

    // admin curriculum
    Route::prefix('/Curriculum')->group(function(){
        Route::get('/{id}', [App\Http\Controllers\Admin\CurriculumController::class, 'index'])->name('curr.index');
        Route::post('/Add/{id}/{year}', [App\Http\Controllers\Admin\CurriculumController::class, 'store'])->name('curr.store');
        Route::put('/Update/{id}', [App\Http\Controllers\Admin\CurriculumController::class, 'update'])->name('curr.update');
        Route::delete('/Delete/{id}/{sid}',[App\Http\Controllers\Admin\CurriculumController::class, 'destroy'])->name('curr.destroy');
    });

    // admin student
    Route::prefix('/Student')->group(function(){
        Route::get('/{status}', [App\Http\Controllers\Admin\StudentController::class, 'index'])->name('student.index');
        Route::post('/Add', [App\Http\Controllers\Admin\StudentController::class, 'store'])->name('student.store');
        Route::put('/Update/{id}', [App\Http\Controllers\Admin\StudentController::class, 'update'])->name('student.update');
        Route::delete('/Delete/{id}',[App\Http\Controllers\Admin\StudentController::class, 'destroy'])->name('student.destroy');
    });

    // grading status
    Route::put('/Update', [App\Http\Controllers\Admin\StatusController::class, 'update'])->name('status.update');

    //users setting

        Route::get('/user/{type}', [App\Http\Controllers\User\UserController::class, 'Users'])->name('users.view');




});


// for admin
Route::group(['middleware' => ['auth', 'role:faculty']],function(){



        // admin subject
     Route::prefix('/Inputs')->group(function(){
        Route::get('/', [App\Http\Controllers\Faculty\GradeInputController::class, 'index'])->name('inputs.index');

     });


});


require __DIR__.'/auth.php';

Auth::routes([
    'register' => false,
]);
