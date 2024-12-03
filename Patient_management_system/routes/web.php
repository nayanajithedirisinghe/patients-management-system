<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;



Route::get('/', [HospitalController::class, 'welcome'])->name('welcome');
Route::get('/doctors-register', [HospitalController::class, 'doctorsRegister'])->name('doctors.register');
Route::get('/patient-appointment', [HospitalController::class, 'patientAppointment'])->name('patient.appointment');
Route::get('/our-services', [HospitalController::class, 'ourServices'])->name('our.services');
Route::get('/about', [HospitalController::class, 'about'])->name('about');
Route::get('/system-register', [HospitalController::class, 'systemRegister'])->name('system.register');
Route::get('/login', [HospitalController::class, 'login'])->name('login');
// Register route
Route::get('/register', [App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
Route::get('/contact', function () {
    return view('contact'); // Make sure you have a contact.blade.php view
})->name('contact');
