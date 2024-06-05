<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;

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

Route::get('/', [\App\Http\Controllers\PageDisplayController::class, 'home'])->name('frontend.home');

Route::get('pages/{slug}', [\App\Http\Controllers\PageDisplayController::class, 'show'])->name('frontend.page');

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localize', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
], function () {
    Route::get('news', function () {
        return view('site.articles.index', [
            'articles' => Article::published()->orderBy('created_at', 'desc')->get(),
        ]);
    })->name('articles');
});

