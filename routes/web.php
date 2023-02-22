<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\GithubController;
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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/auth/redirect', [GithubController::class, 'redirect'])->name('github.login');
Route::get('/auth/callback', [GithubController::class, 'callback']);
// Route::get('/auth/redirect', function () {
//     return Socialite::driver('github')->redirect();
// })->name('github.login');

// Route::get('/auth/callback', function () {
//     $githubUser = Socialite::driver('github')->user();
//     // dd($githubUser);
//     $user = User::updateOrCreate([
//         'github_id' => $githubUser->id,
//     ], [
//         'name' => $githubUser->nickname,
//         'username' => $githubUser->nickname,
//         'email' => $githubUser->email,
//         'github_token' => $githubUser->token,
//         'avatar' => $githubUser->avatar,
//         'auth_type' => 'github',
//         'password' => 'loremcuy',
//         // 'github_refresh_token' => $githubUser->refreshToken,
//     ]);

//     Auth::login($user);

//     return redirect('/dashboard');
//     // $user->token
// });

require __DIR__ . '/auth.php';
