<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewSchoolController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/ecole', function () {
    return view('ecole');})->name('ecole');
Route::get('/formations', function () {
    return view('formations');})->name('formations');
Route::get('/quisommesnous', function () {
    return view('quisommes');})->name('quisommesnous');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');