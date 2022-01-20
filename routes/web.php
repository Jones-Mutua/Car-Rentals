<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Servicescontroller;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\RentalsController;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\ContactController;
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






Route::get("/", [HomeController::class, "index"]);
Route::get("/about", [AboutController::class, "about"]);

Route::get("/users", [AdminController::class, "user"]);
Route::post("/Contact", [ContactController::class, "contact"]);
// Route::post('/Contact', [
//     'uses' => 'ContactController@message',
//     'as' => 'Contact.message'
// ]);
Route::get("/addcar", [CarsController::class, "addCar"]);
Route::get("/addedcar", [CarsController::class, "addCar"]);
Route::get("/cart", [RentalsController::class, "userOrder"]);


Route::get("/rentals", [RentalsController::class, "rentals"]);
Route::get("/contact", [ContactController::class, "index"]);
Route::get("/deleteusers/{id}", [AdminController::class, "deleteuser"]);
Route::get("/deletecar/{id}", [AdminController::class, "deletecar"]);
Route::get("/editcar", [Admincontroller::class, "editcar"]);
Route::get("/cancelorder/{id}", [AdminController::class, "deletecar"]);


Route::get('/orderapproval', [AdminController::class, 'admin.rentals']);
Route::get('/approved/{id}', 'AdminController@approved')->name('approved');
Route::get('/declined/{id}', 'AdminController@declined')->name('declined');
Route::get('/Booked/{id}', 'AdminController@confirm')->name('Booked');

// Route::get('cars', 'CarsController@cars');


Route::get("/redirects", [HomeController::class, "redirects"]);

Route::post('/cars', 'CarsController@store');
//  Route::get('/Contact', 'CarsController@message');

Route::get("/home", [HomeController::class, "sema"]);
//Route::get("/car-page", [CarController::class, "index"]);
Route::get("/car-page", "CarsController@index");
// Route::get("/message", "ContactController@message");



Route::post("/contactus", [ContactController::class, "contactus"]);
Route::get('/add_clients', [AdminController::class , 'add_clients']);
Route::post('/upload_client', [AdminController::class , 'upload']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('home', function () {
    return view('home');
});
// Route::get('about', function () {
//     return view('about');
// });

Route::get('contact', function () {
    return view('contact');
});
Route::get('cars', function () {
    return view('cars');
});

Route::get('pricing', function () {
    return view('pricing');
});
Route::get('charts', function () {
    return view('admin.charts');
});
Route::get('addedcar', function () {
    return view('admin.addedcar');
});

Route::get('blog', function () {
    return view('blog');
});
Route::get('services', function () {
    return view('services');
});

Route::get('checkout', function () {
    return view('checkout');
});
Route::get('myBooking', function () {
    return view('myBooking');
});
Route::get('myOrder', function () {
    return view('myOrder');
});

Route::post('/postcar', [
    'uses' => 'CarsController@postcar',
    'as' => 'Car.postcar'
]);
Route::get("/cart", [RentalsController::class, "index"]);
Route::get('/cart/{id}', [
    'uses' => 'RentalsController@rent',
    'as' => 'cars.rent'
]);
Route::post('/charts', [
    'uses' => 'ContactController@message',
    'as' => 'Contact.message'
]);
Route::get('/cars', [
    'uses' => 'CarsController@getAllCars',
    'as' => 'getAllCars.cars'
]);
Route::post('/orders', [
    'uses' => 'RentalsController@orders',
    'as' => 'car.orders'
]);
Route::get('/addedcar', [
    'uses' => 'AdminController@car',
    'as' =>'cars.car'
]);
Route::get('/myOrder', [
    'uses' => 'RentalsController@userOrder',
    'as' => 'cars.userOrder'
]);

Route::get('/home', [
    'uses' => 'HomeController@sema',
    'as' => 'cars.sema'
]);
Route::get('/pricing', [
    'uses' => 'HomeController@semal',
    'as' => 'cars.semal'
]);
