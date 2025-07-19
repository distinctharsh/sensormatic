<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\ContactInfo;

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
    $contact = \App\Models\ContactInfo::first();
    return view('contact', compact('contact'));
})->name('contact');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });

Route::get('/admin/login', [App\Http\Controllers\Admin\AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\Admin\AuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('admin.logout');

Route::middleware(['admin.auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('services', App\Http\Controllers\Admin\ServiceController::class);
    Route::resource('solutions', App\Http\Controllers\Admin\SolutionController::class, [
        'as' => 'solutions.admin'
    ]);
    Route::get('contact-info/edit', [App\Http\Controllers\Admin\ContactInfoController::class, 'edit'])->name('admin.contact-info.edit');
    Route::put('contact-info/update', [App\Http\Controllers\Admin\ContactInfoController::class, 'update'])->name('admin.contact-info.update');
});

