<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

// Solutions routes
Route::get('/solutions', [HomeController::class, 'solutions'])->name('solutions');
Route::get('/solutions/{slug}', [HomeController::class, 'solution'])->name('solution.show');

// Resources routes
Route::get('/resources', [HomeController::class, 'resources'])->name('resources');
Route::get('/resources/{slug}', [HomeController::class, 'resource'])->name('resource.show');

// Services routes
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/services/{slug}', [HomeController::class, 'service'])->name('service.show');

// About and Contact routes
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
