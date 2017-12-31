<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Slide;
use App\Image;
use Artisan;
use App\Category;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

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
        $products = Product::orderBy('id', 'desc')->paginate(12);
        return view('page.product', compact('products'));
    }

    public function getDetail($alias)
    {
        if($detail = Product::where('alias', $alias)->first())
        {
            $thumbnails = Image::where('product_id', $detail->id)->get();
            $relatives = Product::where('category_id', $detail->category->id)->get();
            return view('page.detail', compact('detail','thumbnails', 'relatives'));
        }
        elseif($detail = Product::where('alias','<>', $alias)->first())
        {
            return view('errors.404');
        }
    }

    public function getCategory($alias)
    {
        if($category = Category::where('alias', $alias)->first())
        {
            $products = Product::where('category_id', $category->id)->paginate(12);
            return view('page.product', compact('category', 'products'));
        }
        elseif($category = Category::where('alias', '<>', $alias)->first())
        {
            return view('errors.404');
        }
    }
    public function updateArtisan(){
        return Artisan::call('down');
    }
    public function searchsp(Request $req)
    {
        $key=$req->key_search;
        $products = array();
        $product_is_name = Product::where('name','like','%'.$req->key_search.'%')->get();
        foreach ($product_is_name as $product_is_name ) {
            $products[] = $product_is_name;
        }
        $categories = Category::where('name','like','%'.$req->key_search.'%')->get();
        foreach ($categories as $category) {
            $category_id = $category->id;
            $product_is_category = Product::where('category_id',$category_id)->get();
            foreach ($product_is_category as $product_is_category) {
                $products[] = $product_is_category;
            }
        }
        $products = array_unique($products);
        $result = count($products);
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $col = new Collection($products);
        $perPage = 12;
        $currentPageSearchResults = $col->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $result_search = new LengthAwarePaginator($currentPageSearchResults, count($col), $perPage, $currentPage,['path' => LengthAwarePaginator::resolveCurrentPath()] );
        return view('page.search_sp')->with(['result_search'=>$result_search->appends(Input::except('page')),'products'=>$products,'key'=>$key, 'result'=>$result]);
    }
    public function getMap()
    {
        return view('page.contact');
    }
    public function intro()
    {
        return view('page.intro');
    }
}
