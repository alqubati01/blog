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
    return view('home2');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/posts', [App\Http\Controllers\PostController::class, 'showPosts'])->name('showPosts');
Route::get('/posts/{post}', [App\Http\Controllers\PostController::class, 'showPost'])->name('showPost');

//Route::get('/videos', [App\Http\Controllers\VideoController::class, 'showVideos'])->name('showVideos');
//Route::get('/podcasts', [App\Http\Controllers\PodcastController::class, 'showPodcasts'])->name('showPodcasts');

Route::get('/tags', [App\Http\Controllers\TagController::class, 'showTags'])->name('showTags');
Route::get('/tag/{title}-{id}', [App\Http\Controllers\TagController::class, 'showTagPosts'])->name('showTagPosts');

Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'showCategories'])->name('showCategories');
Route::get('/category/{title}-{id}', [App\Http\Controllers\CategoryController::class, 'showCategoryPosts'])->name('showCategoryPosts');

Route::get('/membership', function () {
    return view('membership');
})->name('membership');


