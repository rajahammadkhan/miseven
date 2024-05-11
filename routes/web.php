<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AllVehicleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\BlogController;

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

Route::get('/about_us', function () {
    return view('about_us');
})->name('about_us');

Route::get('/connect', function () {
    return view('connect');
})->name('connect'); 

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');

Route::get('/termsandcondition', function () {
    return view('termsandcondition');
})->name('termsandcondition');

// Development UrL
Route::get('/all-vehicles',
    [AllVehicleController::class, 'index']
)->name('all_vehicles');

Route::get('/vehicle/{slug}',
    [AllVehicleController::class, 'detail']
)->name('vehicle_detail');

Route::get('/all-vehicles/{slug}',
    [AllVehicleController::class, 'getVehicleAgainstBrand']
)->name('get_vehicles_against_brand');

Route::get('/all-vehicles-type/{type}',
    [AllVehicleController::class, 'getVehicleAgainstType']
)->name('get_vehicles_against_type');

Route::post('/all-vehicles/booking-form/submit',
    [AllVehicleController::class, 'store']
)->name('booking_form.store');

Route::get('/',
    [HomeController::class, 'index']
)->name('home');

Route::post('/vehicles/search',
    [AllVehicleController::class, 'search']
)->name('vehicles.search');

Route::post('/vehicles/search/post',
    [AllVehicleController::class, 'post']
)->name('vehicles.form.post');

Route::get('/contact-us',
    [ContactUsController::class, 'index']
)->name('contact_us');

Route::post('/send', [ContactUsController::class, 'store'])->name('send.message');

Route::get('/all_vehicles/sort-By-New', [AllVehicleController::class, 'sortingByNew'])->name('vehicle.sortingByNew');
Route::get('/all_vehicles/sort-By-Price-High', [AllVehicleController::class, 'sortingByPriceHigh'])->name('vehicle.sortingByPriceHigh');
Route::get('/all_vehicles/sort-By-Price-Low', [AllVehicleController::class, 'sortingByPriceLow'])->name('vehicle.sortingByPriceLow');

Route::get('/all_vehicless/sort-By-New', [AllVehicleController::class, 'sortingByNew1'])->name('vehicle.sortingByNew1');
Route::get('/all_vehicless/sort-By-Price-High', [AllVehicleController::class, 'sortingByPriceHigh1'])->name('vehicle.sortingByPriceHigh1');
Route::get('/all_vehicless/sort-By-Price-Low', [AllVehicleController::class, 'sortingByPriceLow1'])->name('vehicle.sortingByPriceLow1');

Route::get('/vehicles/search/sort-By-New', [AllVehicleController::class, 'sortingByNew2'])->name('vehicle.sortingByNew2');
Route::get('/vehicles/search/sort-By-Price-High', [AllVehicleController::class, 'sortingByPriceHigh2'])->name('vehicle.sortingByPriceHigh2');
Route::get('/vehicles/search/sort-By-Price-Low', [AllVehicleController::class, 'sortingByPriceLow2'])->name('vehicle.sortingByPriceLow2');

Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');

Route::get('/blogs',
    [BlogController::class, 'index']
)->name('blogs');

Route::get('/blogs/{slug}',
    [BlogController::class, 'detail']
)->name('blog_detail');

