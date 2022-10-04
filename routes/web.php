<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GalleryImgController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

//front pages

//home

Route::get('/', [HomeController::class, 'index'])->name('home');

//blog

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

//booking-form

Route::get('/booking-form', [BookingController::class, 'index'])->name('booking');

//pages

Route::get('/pages', function () {
    return view('front.pages.page');
});

//roomlist

Route::get('/roomlist', [RoomController::class, 'indexall'])->name('List of rooms');

//room show
Route::get('/room', [RoomController::class, 'index'])->name('room');

//staff

Route::controller(StaffController::class)->group(function () {
    Route::get('/staff', 'index')->name("staff");
    Route::get('/staff/create', 'create')->name("staffcreate");
	Route::get('/staff/{id}/show', 'show');
    Route::post('/staff/create', 'store');
    Route::put('/staff/{id}/update', 'update');
    Route::delete('/staff/{id}/delete', 'destroy');
});

//gallery

Route::controller(GalleryImgController::class)->group(function () {
    Route::get('/gallery', 'index')->name("gallery");
    Route::get('/gallery/create', 'create')->name("gallerycreate");
	Route::get('/gallery/{id}/show', 'show');
    Route::post('/gallery/create', 'store');
    Route::put('/gallery/{id}/update', 'update');
    Route::delete('/gallery/{id}/delete', 'destroy');
});

//contact

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

//events

Route::get('/events', [EventsController::class, 'index'])->name('events');

Route::get('/dashboard', function () {
    return view('back.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
