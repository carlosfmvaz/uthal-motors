<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\AnnounceController;
use Illuminate\Support\Facades\Route;


// Public Pages
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('/');
})->name('welcome');

Route::get('/announces/all', function(){
    return view('public-announces/all-announces');
});

// List filtered announces
Route::post('/announces/filter-announces',[AnnounceController::class, 'filterAnnounces']);

// Auth Pages
Route::get('/', [PageController::class, 'welcome']);
Route::get('/announces/make-announce', [PageController::class, 'makeAnnounce'])->middleware('auth');
Route::get('/announces/list-my-announces', [PageController::class, 'listMyAnnounces'])->middleware('auth');
Route::get('/announces/edit/{id}', [PageController::class, 'editAnnounce'])->middleware('auth');
Route::get('/announces/announce-details/{id}', [PageController::class, 'showAnnounce']);

// Announce Actions
Route::post('/announces/create', [AnnounceController::class, 'store'])->middleware('auth');
Route::post('/announces/update-announce', [AnnounceController::class, 'update'])->middleware('auth');
Route::post('/announces/delete-announce', [AnnounceController::class, 'destroy'])->middleware('auth');
