<?php

use Illuminate\Support\Facades\Auth;
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

/*
Route::get('/', function () {
    return view('welcome');
});

*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/hakkimizda', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/salonlar', [App\Http\Controllers\GymController::class, 'index'])->name('gyms');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/blog-detay', [App\Http\Controllers\HomeController::class, 'blogDetails'])->name('blog-details');
Route::get('/galeri', [App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');
Route::get('/iletisim', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');


Route::group(['middleware' => 'guest'], function (){
    Route::get('/login', [App\Http\Controllers\UserController::class, 'index'])->name('login');
    Route::get('/register', [App\Http\Controllers\UserController::class, 'create'])->name('register');
    Route::get('/forgot-password', [App\Http\Controllers\UserController::class, 'forgotPassword'])->name('forgot');
});

Route::group(['middleware' => 'auth'], function (){
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::get('/account', [App\Http\Controllers\UserController::class, 'show'])->name('account');
    Route::get('/delete-account', [App\Http\Controllers\UserController::class, 'showDeleteAccount'])->name('delete');
    Route::post('/deleted-account', [App\Http\Controllers\UserController::class, 'destroy'])->name('destroy');
    Route::get('/change-password', [App\Http\Controllers\ChangePasswordController::class, 'index'])->name('password');
    Route::post('/change-password', [App\Http\Controllers\ChangePasswordController::class, 'store'])->name('change.password');
    Route::get('/gym-register', [App\Http\Controllers\GymController::class, 'create'])->name('gym-register');
});


Route::get('city-district', [\App\Http\Controllers\CityDistrictController::class, 'index']);
Route::post('get-districts-by-city', [\App\Http\Controllers\CityDistrictController::class, 'getDistrict']);
