<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticleController;
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
Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/peserta/success', [App\Http\Controllers\PesertaController::class, 'success'])->name('peserta.sucess');
Route::post('/peserta/store', [App\Http\Controllers\PesertaController::class, 'store'])->name('peserta.store');
Route::get('/parenting/{slug}', [PagesController::class,'showArticle'])->name('parenting.show');
Route::get('/parenting/', [PagesController::class,'showArticleList'])->name('parenting');

Route::group([
    'middleware' => ['auth', 'CustomRole:admin']
], function () {
    
    Route::prefix('superadmin')->name('superadmin.')->group(function () {
        Route::get('/', [AdminController::class,'index'])->name('dashboard');
        Route::get('/peserta', [PesertaController::class,'index'])->name('peserta');
        Route::get('/parenting', [ArticleController::class,'index'])->name('parenting');
        Route::get('/parenting/create', [ArticleController::class,'create'])->name('parenting.create');
        Route::post('/parenting/store', [ArticleController::class,'store'])->name('parenting.store');
        Route::get('/parenting/{id}/edit', [ArticleController::class,'edit'])->name('parenting.edit');
        Route::put('/parenting/{id}/update', [ArticleController::class,'update'])->name('parenting.update');
        Route::get('/profile/edit', [AdminController::class,'editProfile'])->name('profile.edit');
        Route::post('/password/update', [AdminController::class,'updatePassword'])->name('password.update');
       
        // Define other admin routes here
    });
    
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
