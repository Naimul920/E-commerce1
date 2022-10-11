<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\EcomController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;


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

Route::get('/', [EcomController::class, 'index'])->name('home');
Route::get('/category-page', [EcomController::class, 'categoryPage'])->name('category.page');
Route::get('/product-details', [EcomController::class, 'productDetails'])->name('product.details');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/add-category', [CategoryController::class, 'index'])->name('add.category');
    Route::post('/new-category', [CategoryController::class, 'create'])->name('category.new');
    Route::get('/manage-category', [CategoryController::class, 'manage'])->name('manage.category');
    Route::get('/edit-category{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/update-category{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/delete-category{id}', [CategoryController::class, 'delete'])->name('category.delete');

});
