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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('room_data',[App\Http\Controllers\RoomController::class, 'room_data'])->name('room_data');
Route::get('room_data_limit',[App\Http\Controllers\RoomController::class, 'room_data_limit'])->name('room_data_limit');
Route::get('room_discount',[App\Http\Controllers\RoomController::class, 'room_discount'])->name('room_discount');
Route::get('room_discount2',[App\Http\Controllers\RoomController::class, 'room_discount2'])->name('room_discount2');
Route::get('main_dish',[App\Http\Controllers\DishController::class, 'main_dish'])->name('main_dish');
Route::get('drink',[App\Http\Controllers\DishController::class, 'drink'])->name('drink');
Route::get('dessert',[App\Http\Controllers\DishController::class, 'dessert'])->name('dessert');
Route::get('event_data',[App\Http\Controllers\EventController::class, 'event_data'])->name('event_data');
Route::get('get_auth',[App\Http\Controllers\AdminController::class, 'get_auth'])->name('get_auth');
Route::post('contact_post',[App\Http\Controllers\ContactController::class, 'contact_post'])->name('contact_post');
