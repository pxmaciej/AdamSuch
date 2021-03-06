<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ClassdetailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EventDetailController;
use App\Http\Controllers\EventuploadController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FileuploadController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Controller::class, 'getEvent']);

Route::get('/about', function () {
    return view('.pages.about');
});
Route::get('/class', function () {
    return view('.pages.class');
});
Route::get('/class-details', function () {
    return view('.pages.class-details');
});
Route::get('/gallery', function () {
    return view('.pages.gallery');
});
Route::get('/pricing', function () {
    return view('.pages.pricing');
});
Route::get('/event', [EventuploadController::class, 'show']);

Route::get('/event-details', function () {
    return view('.pages.event-details');
});
Route::get('/chceckoutws', function () {
    return view('.pages.chceckout');
});
Route::get('/chceckoutk', function () {
    return view('.pages.chceckouta');
});
Route::get('/chceckoutwo', function () {
    return view('.pages.chceckoutb');
});

Route::get('/politic', function () {
    return view('.pages.politic');
});

Route::get('/contact', function () {
    return view('.pages.contact');
});

Route::get('/class-details/{classid}', [ClassdetailController::class, 'show']);

Route::post('/send', [ContactController::class, 'send']);

Route::get('/event-details/{eventid}', [EventDetailController::class, 'detailEvent']);

Route::get('/movie/{movieid}', [MovieController::class, 'play']);

Route::get('/movielist', [FileuploadController::class, 'show']);

Route::resource('fileupload', FileuploadController::class);

Route::resource('eventupload', EventuploadController::class);

Route::get('/dashadmin', [App\Http\Controllers\HomeController::class, 'index'])->middleware('admin');

Route::resource('deleteuser', UserController::class);

Route::resource('billing', CheckoutController::class);

Auth::routes();
