<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactcontroller;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/ecole', function () {
    return view('ecole');})->name('ecole');
Route::get('/formations', function () {
    return view('formations');})->name('formations');
Route::get('/programmes', function () {
        return view('programmes');})->name('programmes');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/contact', [contactcontroller::class, 'sendMessage'])->name('postmessage');