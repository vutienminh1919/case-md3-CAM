<?php

namespace App\Http\Controllers;

use App\Http\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller implements BaseInterface
{
    protected $categoryRepository;
    public function __construct(CategoryRepository $categoryRepository)
    {

    }

    public function index()
    {
        $categories = Category::all();
        return view('categories.list', compact('categories'));
    }


    public function create()
    {
        return view('categories.add');
    }


    public function store(CreateCategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        $message = "Tạo thể loại sách thành công!";
        Session::flash('create-success', $message);
        return redirect()->route('categories.index', compact('message'));

    }




    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.update', compact('category'));
    }


    public function update(UpdateCategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->save();
        $message = "Cập nhật thể loại sách thành công!";
        Session::flash('update-success', $message);
        return redirect()->route('categories.index', compact('message'));

    }


    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        $message = "Xóa thể loại sách thành công!";
        Session::flash('delete-success', $message);
        return redirect()->route('categories.index', compact('message'));
    }
}
