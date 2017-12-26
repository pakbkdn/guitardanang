<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Slide;
use App\Image;
use App\Category;

class PageController extends Controller
{
    public function getIndex()
    {
        $new_products = Product::orderBy('id', 'desc')->limit(10)->get();
        $sale_products = Product::whereColumn('sale', '<', 'price' )->limit(10)->get();
        $slides = Slide::All();
        return view('page.index', compact('new_products', 'sale_products','slides'));
    }

    public function getProduct()
    {
        $products = Product::All();
        return view('page.product', compact('products'));
    }

    public function getDetail($alias)
    {
        $detail = Product::where('alias', $alias)->first();
        $thumbnails = Image::where('product_id', $detail->id)->get();
        $relatives = Product::where('category_id', $detail->category->id)->get();
        return view('page.detail', compact('detail','thumbnails', 'relatives'));
    }

    public function getCategory($alias)
    {
        $category = Category::where('alias', $alias)->first();
        $products = Product::where('category_id', $category->id)->get();
        return view('page.product', compact('category', 'products'));
    }
}
