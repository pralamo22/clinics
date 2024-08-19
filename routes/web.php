<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\EmployeeController;


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
Route::view('/clinics/clinics', 'clinics')->name('clinics');
Route::get('/clinics/create', [ClinicController::class, 'create'])->name('clinics.create');
Route::post('/clinics', [ClinicController::class, 'store'])->name('clinics.store');

Route::view('employees', 'employees')->name('employees');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');

Route::get('clinics.clinics/{id}', [ClinicController::class, "show"])->name('clinics.show');
Route::get('clinics.clinics', [ClinicController::class, 'index'])->name('clinics');
Route::get('/clinic/edit/{clinic}', [ClinicController::class, 'edit'])->name('clinics.edit');
Route::delete('/clinic/{clinic}', [ClinicController::class, 'destroy'])->name('clinics.destroy');


Route::patch('/clinic/{clinic}', [ClinicController::class, 'update'])->name('clinics.update');


// **************************** Employees *****************++



Route::view('/employees/employees', 'employees')->name('employees');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');

// Route::view('employees', 'employees')->name('employees');


Route::get('employees.employees/{id}', [EmployeeController::class, "show"])->name('employees.show');
Route::get('employees.employees', [EmployeeController::class, 'index'])->name('employees');
Route::get('/employee/edit/{employee}', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::delete('/employee/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');


Route::patch('/employee/{employee}', [EmployeeController::class, 'update'])->name('employees.update');





require __DIR__ . '/auth.php';