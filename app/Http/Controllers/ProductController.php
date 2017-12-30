<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Image;
use Toastr;
use Intervention\Image\ImageManagerStatic as Images;
use Intervention\Image\ImageManagerStatic as Imagess;
use Illuminate\Support\Facades\Storage;


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
            'name' => 'required|unique:products',
            'description' => 'required',
            'price' => 'required',
            'sale' => 'required',
            'image' => 'required|max:2000',
        ],
        [
            'category.required' => 'Vui lòng chọn thể loại',
            'name.required' => 'Vui lòng nhập tên sản phẩm',
            'name.unique' => 'Trùng tên sản phẩm',
            'description.required' => 'Vui lòng nhập mô tả',
            'price.required' => 'Vui lòng nhập giá gốc',
            'sale.required' => 'Vui lòng nhập giá sale',
            'image.required' => 'Vui lòng chọn ảnh sản phẩm',
            'image.max' => 'Hình đại diện không vượt quá 2000kb',
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
            // $file->move($destinationPath, $images);
            $thumbnail = Images::make($file)->resize(500,600)->save(public_path('images/products/').$images);
            $data ->image = $images;
        }
        $data->save();

        $images_rel = array();
        if($files_rel = $rq->file('image-rel'))
        {
            foreach($files_rel as $file_rel)
            {
                $dt = new Image;
                $dt->product_id = $data->id;
                $name = time()."_".$file_rel->getClientOriginalName();
                $destinationPath = public_path('images/products');
                // $file_rel->move($destinationPath, $name);
                $thumbnail_rel = Images::make($file_rel)->resize(500,600)->save(public_path('images/products/').$name);
                $images_rel[]=$name;
                $dt ->image = $name;
                $dt ->save();
            }
        }
        Toastr::success('Tạo sản phẩm thành công', $title = null, $options = []);
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
                'image' => 'max:2000'
            ],
            [
                'name.required' => 'Vui lòng nhập tên sản phẩm',
                'description.required' => 'Vui lòng nhập mô tả',
                'price.required' => 'Vui lòng nhập giá gốc',
                'sale.required' => 'Vui lòng nhập giá sale',
                'image.max' => 'Ảnh đại diện không được quá 2000kb'
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
            // $thumbnail = Image::make($file)->resize(300,300)->save(public_path('images/products/').$images);
            $file->move($destinationPath, $images);
            $oldfile = $data->image;
            Storage::delete($oldfile);
            $data ->image = $images;
        }
        $data->update();
        Toastr::success('Chỉnh sửa sản phẩm thành công', $title = null, $options = []);
        return redirect('ad-guitardn/danh-sach-san-pham');
    }
    public function deleteProduct($id)
    {
        $deleteProduct = Product::find($id);
        $deleteImages = Image::where('product_id', $id)->get();
        foreach($deleteImages as $deleteImage)
        {
            $oldImage = $deleteImage->image;
            Storage::delete($oldImage);
        }

        $oldfile = $deleteProduct->image;
        Storage::delete($oldfile);

        $deleteProduct->images()->delete();
        $deleteProduct->delete();

        Toastr::success('Xóa sản phẩm thành công', $title = null, $options = []);
        return redirect('ad-guitardn/danh-sach-san-pham');
    }

}
