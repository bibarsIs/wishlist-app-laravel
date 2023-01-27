<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::middleware(['auth:sanctum'])->group(function () {
   Route::get('/user', function (Request $request) {
       return $request->user();
   });
   Route::get('/user/items', function () {
       return auth()->user()->wishlistItems;
   });
});

Route::get('/latestWishlisted', [\App\Http\Controllers\WishlistItemController::class, 'index'] )->name('wishlistItem.index');
Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared cache!";
});
