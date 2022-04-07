<?php

use App\Models\Post;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LiveSearchController;

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

Route::view('/', 'home');

// Components
Route::get('/component', function() {
    $posts = Post::all();
    return view('component', compact('posts'));
})->name('component');

// LiveSearch with ajax
Route::get('/live-search', [LiveSearchController::class, 'index'])->name('live-search');
Route::get('/search', [LiveSearchController::class, 'search']);

// Laravel Mailing
Route::get('/email', function() {
    $name = "User-One";
    Mail::to('davidzaw1111@gmail.com')->send(new WelcomeMail($name));
    return new WelcomeMail($name);
})->name('email');

// Ajax Validation & Mailing
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');


