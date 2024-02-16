<?php
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('products', ProductController::class);

Route::get('/dashboard', function () {
    return redirect()->route('products.index');
})->name('dashboard');

Route::post('/products', [ProductController::class, 'store'])->name('products.store');
