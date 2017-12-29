<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Toastr;


class CategoryController extends Controller
{
    public function listCategory()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('admin.category.list-category', compact('categories'));
    }

    public function getAddCategory()
    {
        return view('admin.category.add-category');
    }

    public function postAddCategory(Request $rq)
    {
        $this->validate($rq,
        [
            'name' => 'required|unique:categories',
        ],
        [
            'name.required' => 'Vui lòng nhập tên thể loại',
            'name.unique' => 'Tên thể loại đã được sử dụng'
        ]);
        $addCategory = new Category;
        $addCategory->name = $rq->input('name');
        $addCategory->alias = str_slug($rq->input('name'));
        $addCategory->save();
        Toastr::success('Tạo Thể loại thành công', $title = null, $options = []);
        return redirect('ad-guitardn/danh-sach-the-loai');
    }

    public function getEditCategory($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit-category', compact('category'));
    }

    public function postEditCategory(Request $rq, $id)
    {
        $this ->validate($rq,
        [
            'name' => 'required'
        ],
        [
            'name.required' => 'vui lòng nhập tên thể loại'
        ]);
        $editCategory = Category::find($id);
        $editCategory->name = $rq->input('name');
        $editCategory->alias = str_slug($rq->input('name'));
        $editCategory->update();
        Toastr::success('Chỉnh sửa thể loại thành công', $title = null, $options = []);
        return redirect('ad-guitardn/danh-sach-the-loai');
    }

    public function deleteCategory($id)
    {
        $deleteCategory = Category::find($id);
        $deleteCategory->delete();
        Toastr::success('Xóa thể loại thành công', $title = null, $options = []);
        return redirect('ad-guitardn/danh-sach-the-loai');
    }
}
