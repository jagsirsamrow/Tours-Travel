<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\BlogCategoryCotroller;
use App\Http\Controllers\BlogCotroller;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\HotalController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DasboradController;
use App\Http\Controllers\Auth\RegisteredUserController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/',[HomeController::class,'slider'])->name('/');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/blogdetails/{id}',[HomeController::class,'blogdetails'])->name('blogdetails');
Route::get('/blogpage',[HomeController::class,'blogs'])->name('blogpage');
Route::get('/services',[HomeController::class,'services'])->name('services');
Route::get('/blogcat/{id}',[HomeController::class,'blogcat'])->name('blogcat');
Route::post('/send-email', [EmailController::class, 'index'])->name('send-email');
Route::post('/send-message', [HomeController::class, 'sendmessgae'])->name('send-message');

Route::get('/allcabs/{id}',[HomeController::class,'allcabs'])->name('allcabs');
Route::get('/whatsppmes/{id}/{name}',[HomeController::class,'whatsppmes'])->name('whatsppmes');

// Route::get('/admin', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('admin');

Route::middleware('auth')->group(function () {
     ///CompanyRoutes
     Route::get('/company', [CompanyController::class, 'company'])->name('company');
     Route::post('company_profile', [CompanyController::class, 'company_profile'])->name('company_profile');
     Route::post('/change_logo', [CompanyController::class, 'change_logo'])->name('change_logo');

        // Profile routes
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');
        Route::get('alluser',[DasboradController::class, 'alluser'])->name('alluser');

        Route::post('register', [RegisteredUserController::class, 'store']);
    Route::resource('sliders', SliderController::class);
    Route::resource('team', TeamController::class);
    Route::resource('cars', CarsController::class);
    Route::resource('blogs', BlogCotroller::class);
    Route::resource('blogscat', BlogCategoryCotroller::class);
    Route::resource('packages', PackageController::class);
    Route::resource('city', CityController::class);
    Route::resource('hotal', HotalController::class);
    Route::resource('testimonial', TestimonialController::class);

    

});
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth']], function () {
        Route::resource('sliders', SliderController::class);
        Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

        Route::post('register', [RegisteredUserController::class, 'store']);

        Route::get('alluser',[DasboradController::class, 'alluser'])->name('alluser');
        Route::get('/', [DasboradController::class, 'index'])->name('/');
        Route::get('company', [CompanyController::class, 'company'])->name('company');
        Route::post('company_profile', [CompanyController::class, 'company_profile'])->name('company_profile');
        Route::post('/change_logo', [CompanyController::class, 'change_logo'])->name('change_logo');


        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::resource('team', TeamController::class);
        Route::resource('cars', CarsController::class);
        Route::resource('packages', PackageController::class);
        Route::resource('blogs', BlogCotroller::class);
        Route::resource('blogscat', BlogCategoryCotroller::class);
        Route::resource('testimonial', TestimonialController::class);
        Route::resource('city', CityController::class);
        Route::resource('hotal', HotalController::class);


});
route::get('logout',[HomeController::class,'logout'])->name('logut');
require __DIR__.'/auth.php';
