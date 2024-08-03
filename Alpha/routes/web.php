<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [homecontroller::class,'index']);
// Route::get('dashboard', [admincontroller::class,'index']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [admincontroller::class,'index'])->name('dashboard');
});
Route::get('/user', [usercontroller::class,'index']);
