<?php

use App\Http\Controllers\CarBookController;
use App\Models\Post;
use App\Models\Category;
use App\Models\Passenger;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CarRentalController;
use App\Http\Controllers\DashboardCarController;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/carRental', [CarRentalController::class,'index']);
Route::get("details/{post:slug}", [CarRentalController::class,"show"])->middleware('auth');
// Route::get("book/{post:slug}", [CarBookController::class,"index"])->middleware('auth');

Route::get('/book', function () {
    return view('book', [
        "title" => "Car Booking"
    ]);
});

Route::get('/carReturn', function () {
    return view('carReturn', [
        "title" => "Car Return"
    ]);
});

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);

Route::get('/dashboard', function() {
    return view("dashboard.index");
})->middleware('auth');
Route::resource('/dashboard/cars', DashboardCarController::class)->middleware('auth');