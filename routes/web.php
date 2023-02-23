<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Matcher\RedirectableUrlMatcher;

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

Route::get('/home', function () {
    return redirect('https://www.educastudio.com/');
});

Route::prefix('products')->group(function () {
    Route::get('/marbel-edu-games', [ProductController::class, 'marbelEduGames']);
    Route::get('/marbel-and-friends-kids-games', [ProductController::class, 'marbelAndFriendsKidsGames']);
    Route::get('/riri-story-books', [ProductController::class, 'ririStoryBooks']);
    Route::get('/kolak-kids-songs', [ProductController::class, 'kolakKidsSongs']);
});

Route::prefix('news')->group(function () {
    Route::get('/', function () {
        return redirect("https://www.educastudio.com/news");
    });

    // Route Params
    Route::get('/{url}', function ($url) {
        return redirect("https://www.educastudio.com/news/$url");
    });
});

// Route Prefix -> Halaman Program
Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        return redirect("https://www.educastudio.com/program/karir");
    });
    Route::get('/magang', function () {
        return redirect("https://www.educastudio.com/program/magang");
    });
    Route::get('/kunjungan-industri', function () {
        return redirect("https://www.educastudio.com/program/kunjungan-industri");
    });
});

// Route Biasa -> Halaman About Us
Route::get('/about-us', function () {
    return redirect("https://www.educastudio.com/about-us");
});

// Route Resource Only -> Halaman Contact us
Route::resource('/contact-us', ContactController::class)->only('index');

Route::get('/contact', [ContactController::class, 'form']);
Route::post('/contact', [ContactController::class, 'store']);

