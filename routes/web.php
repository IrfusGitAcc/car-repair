<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;




Route::get('/admin/login', [AdminController::class,'showLoginForm'])->name('login');
Route::post('/login-success', [AdminController::class, 'login'])->name('login.success');
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/store-booking', [HomeController::class, 'storeBooking'])->name('store.booking');
Route::post('/service-enquiry', [HomeController::class, 'serviceEnquiry'])->name('service.enquiry');


Route::middleware(['adminAuth'])->group(function () {
    Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/enquiries', [AdminController::class, 'enquiries'])->name('enquiries');
    Route::get('/notification', [AdminController::class, 'notification'])->name('notification');
    Route::get('/booking-planner', [AdminController::class, 'bookPlan'])->name('book.plan');
    Route::get('/admin/bookings/calendar', [AdminController::class, 'calendar']);
    Route::post('/admin/notification/read/{id}', [AdminController::class, 'markAsRead'])
    ->name('admin.notification.read');
});