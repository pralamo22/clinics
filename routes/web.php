<?php

use App\Http\Controllers\Controller;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClinicController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::view('home', 'welcome')->name('home');
Route::view('index', 'index')->name('index');
Route::view('clinics/clinics', 'clinics')->name('clinics');
Route::get('/clinics/create', [ClinicController::class, 'create'])->name('clinics.create');
Route::post('/clinics', [ClinicController::class, 'store'])->name('post.store');

Route::view('employees', 'employees')->name('employees');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');

Route::get('clinics.clinics/{id}', [ClinicController::class, "show"])->name('clinics.show');
Route::get('clinics.clinics', [ClinicController::class, 'index'])->name('clinics');





require __DIR__ . '/auth.php';
