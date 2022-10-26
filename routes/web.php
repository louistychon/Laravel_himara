<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryImgController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelInfoController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard',[BookingController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';


//hotelinfo

Route::controller(HotelInfoController::class)->group(function () {
    Route::get('/back/hotelinfo', 'index')->name("hotelinfo");
    Route::put('/back/hotelinfo/update', 'update');
});


//users

Route::controller(UserController::class)->group(function () {
    Route::get('/back/users', 'index')->middleware('isModerator')->name("users");
    Route::get('/back/users/create', 'create')->middleware('isAdmin')->name("userscreate");
    Route::get('/back/users/{id}/show', 'show')->middleware('isModerator');
    Route::post('/back/users/create', 'store')->middleware('isAdmin');
    Route::put('/back/users/{id}/update', 'update')->middleware('isModerator');
    Route::delete('/back/users/{id}/delete', 'destroy')->middleware('isAdmin');
});

//testimonials

Route::controller(TestimonialController::class)->group(function () {
    Route::get('/back/testimonials', 'index')->name("testimonials");
    Route::get('/back/testimonials/create', 'create')->name("testimonialscreate");
    Route::get('/back/testimonials/{id}/show', 'show');
    Route::post('/back/testimonials/create', 'store');
    Route::put('/back/testimonials/{id}/update', 'update');
    Route::delete('/back/testimonials/{id}/delete', 'destroy');
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

//gallery

Route::controller(GalleryImgController::class)->group(function () {
    Route::get('/back/gallery', 'index2')->name("galleryback");
    Route::get('/back/gallery/create', 'create')->name("gallerycreate");
    Route::get('/back/gallery/{id}/show', 'show');
    Route::post('/back/gallery/create', 'store');
    Route::put('/back/gallery/{id}/update', 'update');
    Route::delete('/back/gallery/{id}/delete', 'destroy');
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


//home
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name("home");
    Route::get('/back/home', 'index2')->name("homeback");
    Route::put('/back/home/update', 'update');
});

//blog
Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'index')->name('blog');
    Route::get('/blog/{id}', 'showfront');
    Route::get('/back/blog', 'index2')->name("blogback");
    Route::get('/back/blog/create', 'create')->name("blogcreate");
    Route::get('/back/blog/{id}/show', 'show');
    Route::post('/back/blog/create', 'store');
    Route::put('/back/blog/{id}/update', 'update');
    Route::delete('/back/blog/{id}/delete', 'destroy');
    Route::get('search', 'searcharticle')->name('blogsearch');
});

//booking

Route::controller(BookingController::class)->group(function () {
    Route::get('/booking-form','index')->name('booking');
    Route::post('/booking/store', 'store');
});


//room
Route::controller(RoomController::class)->group(function () {
    Route::get('/room/{id}/show', 'showfront');
    Route::get('/roomlist', 'indexall')->name('List of rooms');
    Route::get('/back/room', 'index2')->name("roomback");
    Route::get('/back/room/create', 'create')->name("roomcreate");
    Route::get('/back/room/{id}/show', 'show');
    Route::post('/back/room/create', 'store');
    Route::put('/back/room/{id}/update', 'update');
    Route::delete('/back/room/{id}/delete', 'destroy');
    Route::get('/roomlist?searchtag={tag}', 'searchtags');
    Route::get('/roomlist?searchbar={search}', 'searchroom');
    Route::get('/roomlist?searchcategory={category}', 'searchcategory');
});

//staff

Route::controller(StaffController::class)->group(function () {
    Route::get('/staff', 'index')->name("staff");
    Route::get('/back/staff', 'index2')->name("staffback");
    Route::get('/back/staff/create', 'create')->name("staffcreate");
    Route::get('/back/staff/{id}/show', 'show');
    Route::post('/back/staff/create', 'store');
    Route::put('/back/staff/{id}/update', 'update');
    Route::delete('/back/staff/{id}/delete', 'destroy');
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

//contact frontend

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index')->name('contact');
});


//mails backend menu contact

Route::controller(MailController::class)->group(function () {
    Route::get('/mail/{id}/show', 'show');
    Route::delete('/mail/{id}/delete', 'destroy');
    Route::get('/mail', 'index')->name('mails');
    Route::post('/mail/contact', 'mailcontact')->name('mailcontact');
    Route::get('/mail/register', 'subscription')->name('subscription');
    Route::get('/mail/reservation', 'reservation')->name('reservation');
});


