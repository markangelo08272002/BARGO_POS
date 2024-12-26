<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

// Redirect to login if accessing root
Route::get('/', function () {
    return redirect()->route('login');
});

// Login and registration routes
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth'); 
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// User management routes
Route::get('users', [AuthController::class, 'showUsers'])->name('users')->middleware('auth');
Route::post('users/update/{id}', [AuthController::class, 'updateUser'])->name('users.update')->middleware('auth');
Route::delete('users/delete/{id}', [AuthController::class, 'deleteUser'])->name('users.delete')->middleware('auth');

// Grouping product routes with auth middleware
Route::middleware('auth')->prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create'); 
    Route::post('/', [ProductController::class, 'store'])->name('products.store'); 
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
});

// Grouping category routes with auth middleware
Route::middleware('auth')->prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});
