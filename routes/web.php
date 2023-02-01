<?php

use Illuminate\Support\Facades\Route;

//--------------------------------------------------------------------------
// Shop Routes group
Route::get('/', [App\Http\Controllers\Shop\HomeController::class, 'indexPage'])->name('index');
Route::get('/blog', [App\Http\Controllers\Shop\HomeController::class, 'blog'])->name('blog');

//--------------------------------------------------------------------------
// Admin Panel Routes
Route::get('/credential', function () {return view('credPage');});
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'
])->group(function () {
    // Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/main-board', [\App\Http\Controllers\Admin\MainController::class, 'mainBoard'])->name('main_board');
    
    Route::resource('products', App\Http\Controllers\Admin\ProductController::class)->withTrashed();
    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class)->withTrashed();
    Route::resource('orders', App\Http\Controllers\Admin\OrderController::class)->withTrashed();
    
});
