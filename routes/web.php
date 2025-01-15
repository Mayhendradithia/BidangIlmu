<?php

use App\Http\Controllers\aboutUsController;
use App\Http\Controllers\admin\loginAdminController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\courseViewController;
use App\Http\Controllers\gridCourseController;

use App\Http\Controllers\admin\Benefit\benefitController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SeederController;

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

/*Admin Routes*/
// routes/web.php


// Seeder Route
Route::post('/run-seeder', [SeederController::class, 'runSeeder'])->name('runSeed');

// Admin login routes
Route::get('/formAdmin', [loginAdminController::class, 'formAdmin'])->name('formAdmin');
Route::post('/loginAdmin', [loginAdminController::class, 'admin'])->name('loginAdmin');  // Changed the name to loginAdmin
Route::post('/logoutAdmin', [loginAdminController::class, 'logoutAdmin'])->name('logoutAdmin');




Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users'); // Menampilkan daftar user
    Route::get('admin/user/{id}/verifyPassword', [UserController::class, 'edit'])->name('user.verifyPassword'); // Form verifikasi password
    Route::post('admin/user/{id}/verifyPassword', [UserController::class, 'verifyPassword']); // Proses verifikasi password
    Route::get('admin/user/{id}/edit', [UserController::class, 'editForm'])->name('user.editForm'); // Form edit user setelah password diverifikasi
    Route::put('admin/user/{id}', [UserController::class, 'update'])->name('user.update'); // Update data user
    Route::delete('/admin/user/{id}', [UserController::class, 'destroy'])->name('user.destroy'); // Hapus user
    



    Route::get('/dashbord', [App\Http\Controllers\admin\superadminController::class, 'dashbord'])->name('dashbord');
    Route::get('/courseAdmin', [App\Http\Controllers\admin\coursesAdminController::class, 'courseAdmin'])->name('courseAdmin');
    // Route::get('/konfigurasi', [App\Http\Controllers\admin\KonfigurasiController::class, 'landingAdmin'])->name('konfigurasi');
    // Route::get('/create', [App\Http\Controllers\admin\KonfigurasiController::class, 'create'])->name('create');
    // Route::get('/store', [App\Http\Controllers\admin\KonfigurasiController::class, 'store'])->name('store');
    // Route::post('/store', [App\Http\Controllers\admin\KonfigurasiController::class, 'store'])->name('store');
    Route::resource('/dashboard/konfigurasi', App\Http\Controllers\admin\KonfigurasiController::class);
    Route::resource('/dashboard/mitra', App\Http\Controllers\admin\MitraController::class);
    Route::resource('benefit', benefitController::class);
    Route::resource('/about', App\Http\Controllers\admin\AboutController::class);
    Route::resource('kategoris', KategoriController::class);
    Route::get('/generate-report', [App\Http\Controllers\admin\ReportController::class, 'generateReport'])->name('report.generate');
    Route::resource('materi', MateriController::class);
});









/*User Routes*/
Route::get('/', function () {
    return view('index');
});
Route::get('/', [indexController::class, 'index'])->name('index');
// routes/web.php



Route::get('/aboutUs', [aboutUsController::class, 'about'])->name('about');

// Proteksi index middleware auth
Route::get('/register', [registerController::class, 'showRegisterForm'])->name('showRegisterForm');
Route::post('/register', [registerController::class, 'register'])->name('register');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');




Route::get('forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('password.update');






Route::get('/gridCourse', function () {
    return view('gridCourse');
});




Route::middleware(['auth'])->group(function () {
        Route::get('/profile', [ProfilController::class, 'showProfile'])->name('profile');
        Route::post('/profile/update', [ProfilController::class, 'updateProfile'])->name('profile.update');

    


        Route::get('/kategori/{id}', [IndexController::class, 'showKategori'])->name('kategori.show');
Route::get('/gridCourse', [gridCourseController::class, 'gridCourse'])->name('gridCourse');
Route::get('/userCourseOverview/{id}', [courseViewController::class, 'courseOverview'])->name('userCourseOverview');



    
    
});
