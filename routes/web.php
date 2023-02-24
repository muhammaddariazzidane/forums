<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\GithubController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', HomeController::class, 'index')->name('home');
Route::resource('posts', PostController::class)->middleware('auth');
Route::resource('comments', CommentController::class)->middleware('auth');
Route::resource('chats', ChatController::class)->middleware('auth');

Route::get('/dashboard', function () {
    // dd(Post::with('user', 'comments')->latest()->get());
    // dd(Post::all());
    return view('dashboard', [
        'posts' => Post::latest()->get()
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/auth/github/redirect', [GithubController::class, 'redirect'])->name('github.login');
Route::get('/auth/github/callback', [GithubController::class, 'callback']);
Route::get('/auth/google/redirect', [GoogleController::class, 'redirect'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'callback']);


require __DIR__ . '/auth.php';
