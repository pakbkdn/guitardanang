<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class AdminController extends Controller
{
    public function dashboard()
    {
        $products = Product::All();
        $categories = Category::All();
        return view('admin.dashboard', compact('products', 'categories'));
    }
}
