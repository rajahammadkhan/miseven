<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CMS\DashBoardController;
use App\Http\Controllers\CMS\UserController;
use App\Http\Controllers\CMS\LoginController;
use App\Http\Controllers\CMS\SignUpController;
use App\Http\Controllers\CMS\OurServiceController;

use App\Http\Controllers\CMS\AllVehicleController;
use App\Http\Controllers\CMS\BlogController;
use App\Http\Controllers\CMS\BrandController;
use App\Http\Controllers\CMS\SEOController;
use App\Http\Controllers\CMS\SettingController;
use App\Http\Controllers\CMS\VehicleController;

use App\Http\Controllers\CMS\BookingsController;
use App\Http\Controllers\CMS\ContactController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::group(['middleware' => ['auth']], function () {

    //dashboard
        Route::get('/dashboard', [DashBoardController::class, 'index'])->name('dashboard');

        Route::get('/users', [UserController::class, 'index'])->name('user');
        Route::get('/users/datatable', [UserController::class, 'datatable'])->name('user.datatable');


        Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/users/store', [UserController::class, 'store'])->name('user.store');


        Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::put('users/{user}/update', [UserController::class, 'update'])->name('user.update');


        Route::delete('users/destroy', [UserController::class, 'destroy'])->name('user.destroy');


        Route::patch('users/status', [UserController::class, 'status'])->name('user.status');
        
        Route::get('/profile', [UserController::class,'editProfile'])->name('profile')->middleware('auth');
        Route::post('/profile',[UserController::class,'updateProfile'])->name('profileUpdate');

    // Master Files



    // Site Management

    // Our Services
        Route::get('/our-services', [OurServiceController::class, 'index'])->name('our_service');
        Route::get('/our-services/datatable', [OurServiceController::class, 'datatable'])->name('our_service.datatable');

        Route::get('our-services/{our_service}/edit', [OurServiceController::class, 'edit'])->name('our_service.edit');
        Route::put('our-services/{our_service}/update/{our_service_detail_id}', [OurServiceController::class, 'update'])->name('our_service.update');



    // Other Pages
        Route::get('/pages', [OtherPagesController::class, 'index'])->name('other_pages');
        Route::get('/other-pages/datatable', [OtherPagesController::class, 'datatable'])->name('other_pages.datatable');

    // All Vehicles
    // Brands
    Route::get('/brands', [BrandController::class, 'index'])->name('brands');
    Route::get('/brands/datatable', [BrandController::class, 'datatable'])->name('brand.datatable');
    Route::get('/brands/create', [BrandController::class, 'create'])->name('brand.create');
    Route::post('/brands/store', [BrandController::class, 'store'])->name('brand.store');
    Route::patch('/brands/status', [BrandController::class, 'status'])->name('brand.status');
    Route::get('/brands/{brand}/edit', [BrandController::class, 'edit'])->name('brand.edit');
    Route::put('/brands/{brand}/update', [BrandController::class, 'update'])->name('brand.update');
    Route::delete('/brands/destroy', [BrandController::class, 'destroy'])->name('brand.destroy');

    // All Vehicles
    Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles');
    Route::get('/vehicles/datatable', [VehicleController::class, 'datatable'])->name('vehicle.datatable');
    Route::get('/vehicles/create', [VehicleController::class, 'create'])->name('vehicle.create');
    Route::post('/vehicles/store', [VehicleController::class, 'store'])->name('vehicle.store');
    Route::patch('/vehicles/status', [VehicleController::class, 'status'])->name('vehicle.status');
    Route::patch('/vehicles/is_featured', [VehicleController::class, 'is_featured'])->name('vehicle.is_featured');
    Route::get('/vehicles/{vehicle}/edit', [VehicleController::class, 'edit'])->name('vehicle.edit');
    Route::post('/vehicles/{vehicle}/update', [VehicleController::class, 'update'])->name('vehicle.update');
    Route::delete('/vehicles/destroy', [VehicleController::class, 'destroy'])->name('vehicle.destroy');

    Route::delete('/vehicles/imagedestroy', [VehicleController::class, 'imagedestroy'])->name('vehicleimage.destroy');
    Route::delete('/vehicles/featuredestroy', [VehicleController::class, 'featuredestroy'])->name('vehiclefeature.destroy');

    // Blogs
        Route::get('/blogs', [BlogController::class, 'index'])->name('blog');
        Route::get('/blogs/datatable', [BlogController::class, 'datatable'])->name('blog.datatable');
        Route::get('/blogs/create', [BlogController::class, 'create'])->name('blog.create');
        Route::post('/blogs/store', [BlogController::class, 'store'])->name('blog.store');
        Route::patch('/blogs/status', [BlogController::class, 'status'])->name('blog.status');

        Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blog.edit');
        Route::put('/blogs/{blog}/update', [BlogController::class, 'update'])->name('blog.update');

        Route::delete('/blogs/destroy', [BlogController::class, 'destroy'])->name('blog.destroy');

    // Booking
        Route::get('/booking', [BookingsController::class, 'index'])->name('booking');
        Route::get('/booking/datatable', [BookingsController::class, 'datatable'])->name('booking.datatable');
        Route::delete('/booking/destroy', [BookingsController::class, 'destroy'])->name('booking.destroy');

        // Booking
        Route::get('/contact', [ContactController::class, 'index'])->name('contact');
        Route::get('/contact/datatable', [ContactController::class, 'datatable'])->name('contact.datatable');
        Route::delete('/contact/destroy', [ContactController::class, 'destroy'])->name('contact.destroy');



    // SEO
        Route::get('/seo', [SEOController::class, 'index'])->name('seo');
        Route::get('/seo/datatable', [SEOController::class, 'datatable'])->name('seo.datatable');

    Route::get('seo/{slug}/edit', [SEOController::class, 'edit'])->name('seo.edit');
    Route::put('seo/{slug}/update', [SEOController::class, 'update'])->name('seo.update');

    // Settings
        Route::get('/settings', [SettingController::class, 'index'])->name('settings');
    Route::put('/settings/update', [SettingController::class, 'update'])->name('settings.update');

});

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login/store', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/signup', [SignUpController::class, 'index'])->name('signup');
Route::post('/signup/store', [SignUpController::class, 'signup'])->name('signup.store');


