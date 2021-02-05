<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GymController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GymProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ApplicationController;
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


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/hakkimizda', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/salonlar', [GymController::class, 'index'])->name('gyms');
Route::post('/salonlar', [GymController::class, 'index'])->name('search-gym');
Route::get('/galeri', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/iletisim', [HomeController::class, 'contact'])->name('contact');
Route::get('/salonlar', [GymController::class, 'index'])->name('gyms');
Route::get('/membership-agreement', [HomeController::class, 'membership'])->name('membership');
Route::get('/privacy-policy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/salon/{slug}', [GymProfileController::class, 'index'])->name('blog-yeni');


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
    Route::post('get-districts-by-city', [GymController::class, 'getDistrict']);
    Route::get('/gym-application', [ApplicationController::class, 'show'])->name('gym-application');
    Route::post('/save-application', [ApplicationController::class, 'save'])->name('save-application');
    Route::get('/my-applications', [ApplicationController::class, 'applications'])->name('applications');
});


Route::group(['middleware' => 'admin'], function (){
    Route::resource('admins', AdminController::class);
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.general');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/admin/deleted-users', [AdminController::class, 'deletedUsers'])->name('deleted.users');
    Route::get('/admin-undelete/{id}', [AdminController::class, 'undeleteUsers']) ->name('undelete.users');
    Route::get('/admin/applications', [AdminController::class, 'applications'])->name('admin.applications');
    Route::get('/admin/approved-applications', [AdminController::class, 'approvedApplications'])->name('admin.approved-applications');
    Route::get('/admin/rejected-applications', [AdminController::class, 'rejectedApplications'])->name('admin.rejected-applications');
    Route::get('/admin/deleted-applications', [AdminController::class, 'deletedApplications'])->name('admin.deleted-applications');
    Route::get('/admin/gyms', [AdminController::class, 'gyms'])->name('admin.gyms');
    Route::get('/delete-user/{id}', [AdminController::class, 'destroy']) ->name('delete.user')->where(array('id' => '[0-9]+'));
    Route::post('/update-user/{id}', [AdminController::class, 'update']) ->name('update.user');
    Route::get('/accept-applications/{id}', [AdminController::class, 'accept']) ->name('accept.application');
    Route::get('/reject-applications/{id}', [AdminController::class, 'reject']) ->name('reject.application');
    Route::get('/add-gym', [GymController::class, 'save'])->name('save-gym');


    Route::get('/delete-application/{id}', [ApplicationController::class, 'destroy']) ->name('delete.application')->where(array('id' => '[0-9]+'));
    Route::get('/delete-gym/{id}', [GymController::class, 'destroy']) ->name('delete.gym')->where(array('id' => '[0-9]+'));
});
