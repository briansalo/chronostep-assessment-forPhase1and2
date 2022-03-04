<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



    Route::get('/user_list', [UserController::class, 'UserList'])->name('user.list');

    Route::get('/user_add', [UserController::class, 'UserAdd'])->name('user.add');
    Route::post('/user_save', [UserController::class, 'UserSave'])->name('user.save');

    Route::get('/user_edit/{userId}', [UserController::class, 'UserEdit'])->name('user.edit');
    Route::post('/user_update/{userId}', [UserController::class, 'UserUpdate'])->name('user.update');