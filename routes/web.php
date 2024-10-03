<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::prefix('dashboard')->name('dashboard.')->group( function () {

    Route::get('/home', [App\Http\Controllers\Dashboard\HomeController::class, 'index'])->name('home.index');

    Route::prefix('design')->name('design.')->group( function () {
        Route::get('/design', [App\Http\Controllers\Dashboard\DesignController::class, 'index'])->name('index');
    });

    Route::prefix('demo')->name('demo.')->controller(App\Http\Controllers\Dashboard\DemoController::class)->group( function () {
        Route::get('/', 'index')->name('index');
        Route::get('/table','table')->name('table');
        Route::post('/store','store')->name('store');
        Route::get('/{id}/edit','edit')->name('edit');
        Route::delete('/{id}/destroy',  'destroy')->name('destroy');
        Route::get('/create',  'create')->name('create');
        Route::put('/{id}/update',  'update')->name('update');
    });




});
