<?php

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
    return view('Home');
})->name('Home'); // Optional: you can give a name to this route

// Keep this route as it is to access the 'home' view directly via '/home' URL
Route::get('/Home', function () {
    return view('Home');
})->name('Home');

// This route returns the 'chat' view
Route::get('/Chat', function () {
    return view('Chat');
});
Route::get('/Chat', function () {
    return view('Chat');
})->name('Chat');
Route::get('/Counselor1', function () {
    return view('Counselor1');
})->name('Counselor1');
Route::get('/Counselor2', function () {
    return view('Counselor2');
})->name('Counselor2');
Route::get('/Forum', function () {
    return view('Forum');
})->name('Forum');
Route::get('/Schedule', function () {
    return view('Schedule');
})->name('Schedule');
Route::get('/History', function () {
    return view('History');
})->name('History');