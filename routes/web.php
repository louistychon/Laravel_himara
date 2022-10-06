<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryImgController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;

//back pages

Route::get('/dashboard', function () {
    return view('back.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

//users

Route::controller(UserController::class)->group(function () {
    Route::get('/back/users', 'index')->name("users");
    Route::get('/back/users/create', 'create')->name("userscreate");
	Route::get('/back/users/{id}/show', 'show');
    Route::post('/back/users/create', 'store');
    Route::put('/back/users/{id}/update', 'update');
    Route::delete('/back/users/{id}/delete', 'destroy');
});

//services

Route::controller(ServiceController::class)->group(function () {
    Route::get('/back/services', 'index')->name("services");
    Route::get('/back/services/create', 'create')->name("servicescreate");
	Route::get('/back/services/{id}/show', 'show');
    Route::post('/back/services/create', 'store');
    Route::put('/back/services/{id}/update', 'update');
    Route::delete('/back/services/{id}/delete', 'destroy');
});


//slider

Route::controller(SliderController::class)->group(function () {
    Route::get('/back/slider', 'index')->name("slider");
    Route::get('/back/slider/create', 'create')->name("slidercreate");
	Route::get('/back/slider/{id}/show', 'show');
    Route::post('/back/slider/create', 'store');
    Route::put('/back/slider/{id}/update', 'update');
    Route::delete('/back/slider/{id}/delete', 'destroy');
});

//restaurant
Route::controller(RestaurantController::class)->group(function () {
    Route::get('/back/restaurant', 'index')->name("restaurant");
    Route::get('/back/restaurant/create', 'create')->name("restaurantcreate");
	Route::get('/back/restaurant/{id}/show', 'show');
    Route::post('/back/restaurant/create', 'store');
    Route::put('/back/restaurant/{id}/update', 'update');
    Route::delete('/back/restaurant/{id}/delete', 'destroy');
});


//front pages

//home

Route::get('/', [HomeController::class, 'index'])->name('home');

//blog

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

//booking-form

Route::get('/booking-form', [BookingController::class, 'index'])->name('booking');

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


