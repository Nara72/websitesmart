<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::middleware(['auth', 'role:agent'])->group(function(){
    Route::get('/agent/dashboard', [AgentController::class, 'dashboard'])->name('agent.dashboard');
});


Route::get('/admin/tambahdata',[PegawaiController::class, 'tambahdata'])->name('tambahdata');  

Route::post('/admin/insertdata',[PegawaiController::class, 'insertdata'])->name('insertdata');  

Route::get('/admin/editdata/{id}',[PegawaiController::class, 'editdata'])->name('editdata');  

Route::post('/admin//updatedata/{id}',[PegawaiController::class, 'updatedata'])->name('updatedata');  

Route::get('/admin/delete/{id}',[PegawaiController::class, 'delete'])->name('delete');  

Route::get('/viewdata/{id}',[PegawaiController::class, 'viewdata'])->name('viewdata'); 

Route::get('/admin/dashboard', [PegawaiController::class, 'index'])->name('admin.dashboard');

Route::get('/dataser', [PegawaiController::class, 'dataser'])->name('dataser');

require __DIR__.'/auth.php';