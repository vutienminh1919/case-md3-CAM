<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Session;


class BookController extends Controller implements BaseInterface
{


    public function index()
    {
        $books = Book::all();
        $categories = Category::all();
        return view('books.list', compact('books', 'categories'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('books.add', compact('categories'));
    }


    public function store(CreateBookRequest $request)
    {
        $book = new Book();
        $book->name = $request->name;
        $book->desc = $request->desc;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $book->image = $path;

        }

        $book->status = $request->status;
        $book->price = $request->price;
        $book->category_id = $request->category_id;
        $book->save();
        $message = "Thêm Sách thành công!";
        Session::flash('create-success', $message);
        return redirect()->route('books.index', compact('message'));
    }




    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $categories = Category::all();
        return view('books.update', compact('book', 'categories'));
    }


    public function update(UpdateBookRequest $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->name = $request->name;
        $book->desc = $request->desc;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $book->image = $path;

        }

        $book->status = $request->status;
        $book->price = $request->price;
        $book->category_id = $request->category_id;

        $book->save();
        $message = "Cập nhật thành công!";
        Session::flash('update-success', $message);
        return redirect()->route('books.index', compact('message'));
    }


    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        $message = "Xóa thành công ";
        Session::flash('delete-success', $message);
        return redirect()->route('books.index', compact('message'));
    }

    function search(Request $request)
    {
        $keyword = $request->keyword;
        $books = Book::where('name', 'LIKE', '%' . $keyword . '%')->get();
        return response()->json($books);
    }

}
