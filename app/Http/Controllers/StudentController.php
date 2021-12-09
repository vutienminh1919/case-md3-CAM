<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();
        return view('students.list', compact('students'));
    }


    public function create()
    {
        return view('students.add');
    }


    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->student_code = $request->student_code;
        $student->email = $request->email;
        $student->address = $request->address;
        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $path = $image->store('images', 'public');
            $student->avatar = $path;

        }
        $student->phone = $request->phone;
        $student->save();
        $message = "Tạo sinh vien thành công!";
        toastr()->success('Tạo sinh viên mới thành công ');
        return redirect()->route('students.index', compact('message'));
    }




    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.update', compact('student'));
    }


    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->name = $request->name;
        $student->student_code = $request->student_code;
        $student->email = $request->email;
        $student->address = $request->address;
        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $path = $image->store('images', 'public');
            $student->avatar = $path;

        }
        $student->phone = $request->phone;

        $student->save();
        $message = "Cập nhật sinh vien thành công!";
        toastr()->success('Cập nhật thông tin sinh viên thành công ');
        return redirect()->route('students.index', compact('message'));
    }


    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        $message = "Xóa sinh vien thành công!";
        toastr()->success('Xóa sinh viên thành công ');
        return redirect()->route('students.index', compact('message'));
    }
}
