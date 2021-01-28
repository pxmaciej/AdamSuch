<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FileuploadController;
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

Route::get('/', function () {
    return view('.pages.home');
});
Route::get('/about', function () {
    return view('.pages.about');
});
Route::get('/class', function () {
    return view('.pages.class');
});
Route::get('/class-detail', function () {
    return view('.pages.class-details');
});
Route::get('/gallery', function () {
    return view('.pages.gallery');
});
Route::get('/pricing', function () {
    return view('.pages.pricing');
});
Route::get('/event', function () {
    return view('.pages.event');
});
Route::get('/event-details', function () {
    return view('.pages.event-details');
});
Route::get('/contact', function () {
    return view('.pages.contact');
});
Route::get('/chceckout', function () {
    return view('.pages.chceckout');
});
Route::get('/movielist', [FileuploadController::class, 'show']);
Route::resource('fileupload', FileuploadController::class);

Auth::routes();

Route::get('/dashadmin', [App\Http\Controllers\HomeController::class, 'index'])->middleware('admin');


