<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GymController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\CityDistrictController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/hakkimizda', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/salonlar', [GymController::class, 'index'])->name('gyms');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog-detay', [HomeController::class, 'blogDetails'])->name('blog-details');
Route::get('/galeri', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/iletisim', [HomeController::class, 'contact'])->name('contact');


Route::group(['middleware' => 'guest'], function (){
    Route::get('/login', [UserController::class, 'index'])->name('login');
    Route::get('/register', [UserController::class, 'create'])->name('register');
    Route::get('/forgot-password', [UserController::class, 'forgotPassword'])->name('forgot');
});

Route::group(['middleware' => 'auth'], function (){
    Route::resource('users', UserController::class);
    Route::get('/account', [UserController::class, 'show'])->name('account');
    Route::get('/delete-account', [UserController::class, 'showDeleteAccount'])->name('delete');
    Route::post('/deleted-account', [UserController::class, 'destroy'])->name('destroy');
    Route::get('/change-password', [ChangePasswordController::class, 'index'])->name('password');
    Route::post('/change-password', [ChangePasswordController::class, 'store'])->name('change.password');
    Route::get('/gym-register', [GymController::class, 'show'])->name('gym-register');
    Route::post('get-districts-by-city', [GymController::class, 'getDistrict']);
    Route::post('/save-gym', [GymController::class, 'save'])->name('gym-save');
});


Route::get('/home', [HomeController::class, 'test'])->name('home');
