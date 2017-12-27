<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;


class ProductController extends Controller
{
    public function listProduct()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('admin.product.list-product', compact('products'));
    }

    public function getAddProduct()
    {
        $categories = Category::All();
        return view('admin.product.add-product', compact('categories'));
    }

    public function postAddProduct(request $rq)
    { $this->validate($rq,
        [
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'sale' => 'required',
            'image' => 'required',
        ],
        [
            'category.required' => 'Vui lòng chọn thể loại',
            'name.required' => 'Vui lòng nhập tên sản phẩm',
            'description.required' => 'Vui lòng nhập mô tả',
            'price.required' => 'Vui lòng nhập giá gốc',
            'sale.required' => 'Vui lòng nhập giá sale',
            'image.required' => 'Vui lòng chọn ảnh sản phẩm'
        ]);
        $data = new Product;

        $data->category_id = $rq->input('category');
        $data ->name = $rq->input('name');
        $data->alias = str_slug($rq->input('name'));
        $data->description = $rq->input('description');
        $data->price = $rq->input('price');
        $data->sale = $rq->input('sale');
        if($rq->hasFile('image'))
        {
            $file = $rq->file('image');
            $filename = $file->getClientOriginalName('image');
            $destinationPath = public_path('images/products');
            $images = time()."_".$filename;
            $thumbnail = Image::make($file)->resize(300,300)->save(public_path('images/products/').$images);
            $data ->image = $images;
        }
        $data->save();
        return redirect('ad-guitardn/danh-sach-san-pham');
    }

    public function getEditProduct($id)
    {
        $categories = Category::All();
        $editProduct = Product::find($id);
        return view('admin.product.edit-product', compact('categories','editProduct'));
    }

    public function postEditProduct(request $rq, $id)
    {
        $this->validate($rq,
            [
                'name' => 'required',
                'description' => 'required',
                'price' => 'required',
                'sale' => 'required',
            ],
            [
                'name.required' => 'Vui lòng nhập tên sản phẩm',
                'description.required' => 'Vui lòng nhập mô tả',
                'price.required' => 'Vui lòng nhập giá gốc',
                'sale.required' => 'Vui lòng nhập giá sale',
            ]);
        $data = Product::find($id);
        if($rq->input('category') != null)
        {
            $data->category_id = $rq->input('category');
        }
        $data ->name = $rq->input('name');
        $data->alias = str_slug($rq->input('name'));
        $data->description = $rq->input('description');
        $data->price = $rq->input('price');
        $data->sale = $rq->input('sale');
        if($rq->hasFile('image'))
        {
            $file = $rq->file('image');
            $filename = $file->getClientOriginalName('image');
            $destinationPath = public_path('images/products');
            $images = time()."_".$filename;
            $thumbnail = Image::make($file)->resize(300,300)->save(public_path('images/products/').$images);
            $data ->image = $images;
        }
        $data->update();
        return redirect('ad-guitardn/danh-sach-san-pham');
    }
    public function deleteProduct($id)
    {
        $deleteProduct = Product::find($id);
        $deleteProduct->delete();
        return redirect('ad-guitardn/danh-sach-san-pham');
    }
}
