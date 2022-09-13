<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\MainController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/home', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/flights', function () {
    return Inertia::render('Flights');
})->name('flights');
Route::get('/visa', function () {
    return Inertia::render('Visa');
})->name('visa');
Route::get('/packages', function () {
    return Inertia::render('Packages');
})->name('packages');
Route::get('/offers', function () {
    return Inertia::render('Offers');
})->name('offers');


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth:web']], function () {
    Route::get('/dashboard', [MainController::class, 'index'])->name('dashboard');
});
