<?php

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

Route::get('/', function () {
    return view('app');
});
Auth::routes();
// Route::prefix('admin')->middleware(['auth:admin'])->group(function () {
//     // Admin routes

//     Route::get('/', 'UserController@index')->name('admin.dashboard');
// });

// Route::prefix('user')->middleware(['auth'])->group(function () {
//     // Normal user routes

//     Route::get('/', 'UserController@index')->name('admin.dashboard');
// });

// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::get('/', 'AdminController@index')->name('dashboard');
//     // Define other admin routes here
// });

// Route::prefix('user')->name('user.')->group(function () {
//     Route::get('/', 'User/UserController@index')->name('dashboard');
//     // Define other user routes here
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group([
    'middleware' => ['auth', 'CustomRole:admin']
], function () {
    Route::get('superadmin', function () {
        return 'Halo admin';
    })->name('superadmin');
});
Route::group([
    'middleware' => ['auth', 'CustomRole:peserta']
], function () {

    Route::get('peserta', function () {
        return 'Halo peserta';
    })->name('peserta');
});
Route::group([
    'middleware' => ['auth', 'CustomRole:voter']
], function () {
    Route::get('voter', function () {
        return 'Halo voter';
    })->name('voter');
});
