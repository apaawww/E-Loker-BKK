<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\PagelowController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider, and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('page1');
});



Route::middleware('auth:alumni')->group(function () {
});
    Route::get('/page', [AlumniController::class, 'index'])->name('page');
    Route::get('/login_alumni', [AlumniController::class, 'login_alumni'])->name('login_alumni');
    Route::post('login/alumni', [AlumniController::class, 'auth_alumni'])->name('login.alumni');
    Route::get('/logout/alumni', [AlumniController::class, 'logout_alumni'])->name('logout.alumni');
    
    Route::get('/alumni/profil', [AlumniController::class, 'profil'])->name('alumni.profil');
    Route::get('/alumni/edit/{id}/', [AlumniController::class, 'edit'])->name('alumni.edit');
    Route::post('/alumni/update/{alumni}', [AlumniController::class, 'update'])->name('profil.update');
    
    Route::get('/perusahaan/add/alumni', [PerusahaanController::class, 'add'])->name('perusahaan.add_alumni');
    Route::post('/perusahaan/create/alumni', [PerusahaanController::class, 'createByAlumni'])->name('perusahaan.create.alumni');
    Route::get('/perusahaan/alumni', [PerusahaanController::class, 'showPerusahaanAlumni'])->name('perusahaan.show_alumni');
    Route::get('/perusahaan/hapus_alumni/{id}', [PerusahaanController::class, 'hapus'])->name('perusahaan.hapus_alumni');
    


Route::middleware('auth:admin')->group(function () {
});
    
    Route::get('/login_admin', [AdminController::class, 'login_admin'])->name('login_admin');
    Route::post('login/admin', [AdminController::class, 'auth_admin'])->name('login.admin');
    Route::get('/logout/admin', [AdminController::class, 'logout_admin'])->name('logout.admin');
    
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    
    Route::get('/perusahaan/add', [PerusahaanController::class, 'add'])->name('perusahaan.add');
    Route::post('/perusahaan/create/admin', [PerusahaanController::class, 'create'])->name('perusahaan.create.admin');
    Route::get('/perusahaan/show', [PerusahaanController::class, 'show'])->name('perusahaan.index');
    Route::get('/perusahaan/edit/{id}', [PerusahaanController::class, 'edit'])->name('perusahaan.edit');
    Route::post('/perusahaan/update/{perusahaan}', [PerusahaanController::class, 'update'])->name('perusahaan.update');
    Route::get('/perusahaan/hapus/{id}', [PerusahaanController::class, 'hapus'])->name('perusahaan.hapus');
    
    Route::get('/lowongan/index', [LowonganController::class, 'show'])->name('lowongan.show');
    Route::get('/lowongan/add', [LowonganController::class, 'add'])->name('lowongan.add');
    Route::post('lowongan/create', [LowonganController::class, 'create'])->name('lowongan.create');
    Route::get('/lowongan/edit/{id}/', [LowonganController::class, 'edit'])->name('lowongan.edit');
    Route::post('/lowongan/update/{lowongan}', [LowonganController::class, 'update'])->name('lowongan.update');
    Route::get('/lowongan/hapus/{id}', [LowonganController::class, 'hapus'])->name('lowongan.hapus');
    
    Route::get('/lamaran/index', [LamaranController::class, 'show'])->name('lamaran.show');
    Route::get('/lamaran/add', [LamaranController::class, 'add'])->name('lamaran.add');
    Route::post('lamaran/create', [LamaranController::class, 'create'])->name('lamaran.create');
    Route::get('/lamaran/edit/{id}/', [LamaranController::class, 'edit'])->name('lamaran.edit');
    Route::post('/lamaran/update/{lamaran}', [LamaranController::class, 'update'])->name('lamaran.update');
    Route::get('/lamaran/hapus/{id}', [LamaranController::class, 'hapus'])->name('lamaran.hapus');
    
    Route::get('/alumni/index', [AlumniController::class, 'show'])->name('alumni.show');
    Route::get('/alumni/add', [AlumniController::class, 'add'])->name('alumni.add');
    Route::post('/alumni/create', [AlumniController::class, 'create'])->name('alumni.create');
    Route::post('/alumni/update/{alumni}', [AlumniController::class, 'update'])->name('alumni.update');
    Route::get('/alumni/hapus/{id}', [AlumniController::class, 'hapus'])->name('alumni.hapus');
    Route::get('alumni/detail/{id}', [AlumniController::class, 'detail'])->name('alumni.detail');
    
    Route::get('/admin/index', [AdminController::class, 'show'])->name('admin.show');
    Route::get('/admin/add', [AdminController::class, 'add'])->name('admin.add');
    Route::post('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::post('/admin/update/{admin}', [AdminController::class, 'update'])->name('admin.update');
    Route::get('/admin/hapus/{id}', [AdminController::class, 'hapus'])->name('admin.hapus');





