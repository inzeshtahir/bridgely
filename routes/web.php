<?php
require __DIR__.'/auth.php';

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


Route::middleware('auth')->group(function () {
    Route::get('/appointments/book', [AppointmentController::class, 'showForm'])->name('appointments.form');
    Route::post('/appointments/book', [AppointmentController::class, 'book'])->name('appointments.book');
});

Route::middleware('auth')->group(function () {
    Route::get('/chat', [ChatbotController::class, 'index'])->name('chatbot.view');
    Route::post('/chat', [ChatbotController::class, 'send'])->name('chatbot.send');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/appointment', [AppointmentController::class, 'form'])->name('appointment.form');
    Route::post('/appointment', [AppointmentController::class, 'send'])->name('appointment.send');
});

Route::middleware(['auth', 'subscribed'])->group(function () {
    Route::get('/chatbot', [ChatbotController::class, 'index'])->name('chat.index');
    Route::post('/chatbot', [ChatbotController::class, 'send'])->name('chat.send');
});


Route::get('/chat', [ChatbotController::class, 'index'])->name('chat.index');
Route::post('/chat/message', [ChatbotController::class, 'sendMessage'])->name('chat.send');


Route::middleware('auth')->group(function () {
    Route::get('/plans', [SubscriptionController::class, 'showPlans'])->name('plans');
    Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');
});


Route::post('/contact', [LandingPageController::class, 'storeContact'])->name('contact.submit');

Route::view('/crm-connect', 'crm.connect')->name('crm.connect');
Route::get('/plans', [\App\Http\Controllers\PlanController::class, 'index'])->name('plans.index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
