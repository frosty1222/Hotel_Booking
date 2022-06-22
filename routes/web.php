<?php

use Illuminate\Support\Facades\Route;
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
Auth::routes();

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('adminindex',[App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::get('admin/room/index',[App\Http\Controllers\RoomController::class, 'index'])->name('admin.room.index');
Route::get('admin/room/create',[App\Http\Controllers\RoomController::class, 'create'])->name('admin.room.create');
Route::get('admin/room/edit',[App\Http\Controllers\RoomController::class, 'edit'])->name('admin.room.create');
Route::get('user/add_avatar',[App\Http\Controllers\AdminController::class, 'add_avatar'])->name('add_avatar');
Route::post('update_avatar',[App\Http\Controllers\AdminController::class, 'update_avatar'])->name('update_avatar');
Route::get('get_auth',[App\Http\Controllers\AdminController::class, 'get_auth'])->name('get_auth');
Route::post('reservation_save',[App\Http\Controllers\ReservationController::class, 'reservation_save'])->name('reservation_save');
Route::get('admin/category/available',[App\Http\Controllers\CategoryController::class, 'available'])->name('admin.category.available');
Route::get('check_avail/{id}',[App\Http\Controllers\CategoryController::class, 'check_avail'])->name('check_avail');
Route::get('get_meal/{id}',[App\Http\Controllers\DishController::class, 'get_meal'])->name('get_meal');
Route::get('admin/dish/order',[App\Http\Controllers\DishController::class, 'order_view'])->name('order_view');
Route::post('received_dish',[App\Http\Controllers\DishController::class, 'received_dish'])->name('received_dish');
Route::get('delete_order_dish',[App\Http\Controllers\DishController::class, 'delete_order_dish'])->name('delete_order_dish');
Route::post('save_email',[App\Http\Controllers\ContactController::class, 'save_email'])->name('save_email');
Route::get('potentail_view',[App\Http\Controllers\ContactController::class, 'potentail_view'])->name('potentail_view');
Route::get('delete_potentail/{id}',[App\Http\Controllers\ContactController::class, 'delete_potentail'])->name('delete_potentail');
Route::get('check_Id',[App\Http\Controllers\DishController::class, 'check_Id'])->name('check_Id');
Route::resources([
       'category'=>App\Http\Controllers\CategoryController::class,
       'room'=>App\Http\Controllers\RoomController::class,
       'reservation'=>App\Http\Controllers\ReservationController::class,
       'contact'=>App\Http\Controllers\ContactController::class,
       'dish'=>App\Http\Controllers\DishController::class,
       'discategory'=>App\Http\Controllers\DiscategoryController::class,
       'event'=>App\Http\Controllers\EventController::class,
]);
