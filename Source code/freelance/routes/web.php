<?php

use Illuminate\Support\Facades\Route;

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
//     return view('signup');
// });
// Route::get('login/', function () {
//     return view('login');
// });
// Route::get('forget/', function () {
//     return view('forget');
// });
// Route::get('home/', function () {
//     return view('landing');
// });
// Route::get('dashboard', [App\Http\Controllers\FreelancerController::class, 'dashboard']); 
Route::get('login', [App\Http\Controllers\FreelancerController::class, 'index'])->name('login');
Route::post('custom-login', [App\Http\Controllers\FreelancerController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [App\Http\Controllers\Auth\RegisterController::class, 'registration'])->name('register');
Route::post('custom-registration', [App\Http\Controllers\FreelancerController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [App\Http\Controllers\FreelancerController::class, 'signOut'])->name('signout');
