<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;


//ADMIN
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\EventController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
});


Route::get('/services', function () {
    return view('service');
});

Route::get('/donate', function () {
    return view('donate');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('what-we-do', function () {
    return view('service');
});


Route::get('gallery', function () {
    return view('gallery');
});

// User Event Routes
Route::get('/events', [App\Http\Controllers\UserEventController::class, 'index'])->name('user.events.index');
Route::get('/events/{id}', [App\Http\Controllers\UserEventController::class, 'show'])->name('user.events.show');


Route::get('/blog', [App\Http\Controllers\UserEventController::class, 'blog'])->name('user.blogs.index');

Route::get('/blogs/{id}', [App\Http\Controllers\UserEventController::class, 'showblog'])->name('user.blogs.show');


Route::post('/events/{event}/register', [RegistrationController::class, 'store'])->name('events.register');



Route::get('/donate', [DonationController::class, 'index'])->name('donate');
Route::post('/donate/paystack', [DonationController::class, 'payWithPaystack'])->name('paystack.pay');
Route::get('/donate/paystack/callback', [DonationController::class, 'paystackCallback'])->name('paystack.callback');

Route::post('/donate/kora', [DonationController::class, 'payWithKora'])->name('kora.pay');
Route::get('/donate/kora/callback', [DonationController::class, 'koraCallback'])->name('kora.callback');

//ADMIN
Route::get('admin/login', [AdminAuthController::class, 'index'])->name('admin-login');
Route::post('post/login', [AdminAuthController::class, 'postLogin'])->name('admin-login.post'); 

Route::get('admin/logout', [AdminAuthController::class, 'logout'])->name('admin-logout');

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('dashboard');

    Route::get('/events/{id}/registrations', [RegistrationController::class, 'registrations'])
        ->name('events.registrations');

    Route::resource('events', \App\Http\Controllers\Admin\EventController::class);
    Route::resource('blogs', \App\Http\Controllers\Admin\BlogController::class);

});


