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
    Route::get('/Course', [App\Http\Controllers\Admin\ProgramController::class, 'index'])->name('admin.course');

    });

});

require __DIR__.'/auth.php';
