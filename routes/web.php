<?php

use App\Http\Controllers\account\LoginController;
use App\Http\Controllers\account\RegisterController;
use App\Http\Controllers\CampgroundsController;
use App\Http\Controllers\LogoutController;
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

Route::get('/', function () {
    return view('landing');
})->name('landing');
Route::get('/campgrounds', [CampgroundsController::class, 'index'])->name('campgrounds');
Route::get('/campgrounds/add', [CampgroundsController::class, 'add'])->name('add-campground');
Route::post('/campgrounds/add', [CampgroundsController::class, 'store']);
Route::get('/campgrounds/{slug}', [CampgroundsController::class, 'detail'])->name('campgrounds-detail');
Route::get('/campgrounds/{slug}/comment', [CampgroundsController::class, 'comment'])->name('campgrounds-comment')->middleware('auth');
Route::post('/campgrounds/{slug}/comment', [CampgroundsController::class, 'storeComment'])->middleware('auth');
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout')->middleware('auth');
