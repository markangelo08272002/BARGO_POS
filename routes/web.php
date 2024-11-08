<?php 
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProductController;
  

Route::get('/', function () {
    return redirect()->route('login');
});
  
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
