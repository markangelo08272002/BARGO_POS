<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
class DashboardController extends Controller
{
    public function index()
    {
        // Get the count of users
        $userCount = User::count();

        // Get the count of products
        $productCount = Product::count();

        // Get the count of Category
        $categoryCount = Category::count();

        // Pass the count to the view
        return view('dashboard', compact('userCount', 'productCount' , 'categoryCount'));
    }
}
