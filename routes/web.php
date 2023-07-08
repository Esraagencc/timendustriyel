<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjeController;
use App\Http\Controllers\WebController;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/categorys', [ProjeController::class, 'categorys'])->name('categorys');
    Route::get('/category-add', [ProjeController::class, 'categoryadd'])->name('categoryadd');
    Route::get('/category-update/{id}', [ProjeController::class, 'categoryupdate'])->name('categoryupdate');
    Route::get('/products', [ProjeController::class, 'products'])->name('products');
    Route::get('/product-add', [ProjeController::class, 'productadd'])->name('productadd');
    Route::get('/product-update/{id}', [ProjeController::class, 'productupdate'])->name('productupdate');

    Route::post('/category-update/{id}', [ProjeController::class, 'categoryUpdatePost'])->name('categoryUpdatePost');
    Route::get('/category-delete/{id}', [ProjeController::class, 'categoryDeletePost'])->name('categoryDeletePost');
    Route::post('/category-save', [ProjeController::class, 'categorysave'])->name('categorysave');
    Route::post('/product-save', [ProjeController::class, 'productsave'])->name('productsave');
    Route::post('/product-update/{id}', [ProjeController::class, 'productUpdatePost'])->name('productUpdatePost');
    Route::get('/product-delete/{id}', [ProjeController::class, 'productDeletePost'])->name('productDeletePost');

});
Route::get('/homee', [WebController::class, 'home'])->name('home');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';



