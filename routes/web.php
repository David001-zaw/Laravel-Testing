<?php

use App\Models\Post;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;
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


// Laravel Language Switcher

Route::redirect('/', '/en');

Route::group(['prefix' => '{locale}'], function () {
    Route::view('/', 'home')->name('home');

    // Language Switching
    Route::get('/lang-switch', function(){
        return view('lang-switch');
    })->name('lang-switch');

    // Components
    Route::get('/component', function() {
        $posts = Post::all();
        return view('component', compact('posts'));
    })->name('component');

    // LiveSearch with ajax
    Route::get('/live-search', [LiveSearchController::class, 'index'])->name('live-search');
    Route::get('/search', [LiveSearchController::class, 'search']);

    // Laravel Mailing
    Route::get('/email', [EmailController::class, 'index'])->name('email');
    Route::post('/email/store', [EmailController::class, 'store'])->name('email.store');
    Route::get('/thankyou', [EmailController::class, 'thankyou'])->name('thankyou');

    // Ajax Validation & Mailing
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

    // Multiple Image/File Upload with Permission
    Route::resource('/photo', PhotoController::class);

    // Polymorphic Relation Comments
    Route::group(['prefix' => 'posts', 'as' => 'posts.'], function(){
        Route::get('/', [PostController::class, 'index'])->name('index');
        Route::get('/create', [PostController::class, 'create'])->name('create');
        Route::post('/', [PostController::class, 'store'])->name('store');
        Route::get('/{id}', [PostController::class, 'show'])->name('show');
    });

    Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.add');
    Route::post('/reply/store', [CommentController::class, 'replyStore'])->name('reply.add');

    Route::delete('/comment/delete', [CommentController::class, 'delete'])->name('comment.delete');


    // Laravel CRUD
    /* Route::get('/games', [GameController::class, 'index'])->name('games.index');
    Route::get('/games/create', [GameController::class, 'create'])->name('games.create');
    Route::post('/games/store', [GameController::class, 'store'])->name('games.store');
    Route::get('/games/{id}', [GameController::class, 'show'])->name('games.show');
    Route::get('/games/{id}/edit', [GameController::class, 'edit'])->name('games.edit');
    Route::put('/games/{id}', [GameController::class, 'update'])->name('games.update');
    Route::delete('/games/{id}', [GameController::class, 'destroy'])->name('games.destroy'); */
    Route::resource('/games', GameController::class);






















    Auth::routes();




});


