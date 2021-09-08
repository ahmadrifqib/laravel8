<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileInformationController;

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

// Get, Post, Put/Patch, Delete

//Route::get('/', fn () => view('home')); //7.4
Route::get('/', HomeController::class);
//Route::view('contact', 'contact');
Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);

Route::view('about', 'about');
Route::view('profile', 'profile');

//Wildcard
Route::get('profile/{username}/{posts}', function ($usrnm, $posts) {
    return view('profile', ['name' => $usrnm, 'posts' => $posts]);
});

//Request : URL /profile?username=you
// Route::get('profile', function (Request $r) {
//     $name = $r->name;
//     return "my name is {$name}";
//     //return view ('profile', ['name' => $name]);
// });

Route::get('profile/{identifier}', [ProfileInformationController::class, '__invoke']);
