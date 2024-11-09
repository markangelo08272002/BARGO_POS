<?php 
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
  

Route::get('/', function () {
    return redirect()->route('login');
});
  
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::delete('/products/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');
Route::get('users', [AuthController::class, 'showUsers'])->name('users')->middleware('auth');
Route::post('users/update/{id}', [AuthController::class, 'updateUser'])->name('users.update');
Route::delete('users/delete/{id}', [AuthController::class, 'deleteUser'])->name('users.delete');


//Products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create'); // Route for creating a product
Route::post('/products', [ProductController::class, 'store'])->name('products.store'); // Route for storing a new product
Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::resource('products', ProductController::class);

//categories
Route::prefix('categories')->group(function () {
    // Correct the GET route for listing categories
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');

    // Add new category form
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    
    // Store new category
    Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
    
    // Edit category form
    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    
    // Update category
    Route::put('/{id}', [CategoryController::class, 'update'])->name('categories.update');
    
    // Delete category
    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});
