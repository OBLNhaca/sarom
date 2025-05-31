<?php

use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/consultas/marcar', [ConsultationController::class, 'markConsultation'])->name('consultations.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/funcionarios', StaffController::class);
    Route::resource('consultas', ConsultationController::class);
    Route::get('consultations/{consultation}/cancel', [ConsultationController::class, 'cancel'])->name('consultations.cancel');
    Route::get('reminders/generate', [ReminderController::class, 'generate'])->name('reminders.generate');

    Route::resource('/utilizadores', UserController::class);
});


require __DIR__.'/auth.php';
