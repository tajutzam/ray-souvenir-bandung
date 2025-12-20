<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::get("/", [LandingPageController::class, "index"])->name('landing.index');
Route::get("/about", [LandingPageController::class, "about"])->name('landing.about');
Route::get("/products", [LandingPageController::class, "product"])->name('landing.product');
Route::get("/contact", [LandingPageController::class, "contact"])->name('landing.contact');
Route::get("/gallery", [LandingPageController::class, "gallery"])->name('landing.gallery');
Route::get('/product/{product}', [LandingPageController::class, 'show'])
    ->name('landing.product.detail');
Route::get('/testimonies', [LandingPageController::class, "testimoni"])->name('landing.testimonie');


Route::get("/blogs", [LandingPageController::class, "blogs"]);
Route::get("/blogs/{slug}", [LandingPageController::class, "detailBlog"]);