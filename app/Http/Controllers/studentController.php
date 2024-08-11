<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentController extends Controller
{
    function index()
    {
       
        $students=Student::all();
        
        return view('students.studentsData',compact("students"));
    }


    function view($id)
    {

  
      $student=Student::findOrFail($id);
      return view('students.studentData',compact("student"));
    }

 


    public function destroy($id)
{
    $student = Student::findOrFail($id);
    $student->delete();
    
    $this->resetStudentIds();
    
    return redirect()->route('students.index');
}


     

     function create()
     {

        return view('students.create');
     }

     function store( Request $request)
     {

        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'image' => 'required|image',
            'grade' => 'required',
        ]);
       $img = $request->file('image');
       $ext = $img->getClientOriginalExtension();
       $name = uniqid() . '.' . $ext;
       $img->move(public_path('uploads/students'), $name);


       Student::create([
        'name' => $request->name,
        'email' => $request->email,
        'address' => $request->address,
        'gender' => $request->gender,
        'image' => $name,
        'grade' => $request->grade,
       ]);

       
       return to_route('students.index');

       
      


     }
     
     public function edit($id)
{
    $student = Student::findOrFail($id);
    return view('students.update', compact('student'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'address' => 'required',
        'email' => 'required|email',
        'gender' => 'required',
        'image' => 'nullable|image',
        'grade' => 'required',
    ]);

    $student = Student::findOrFail($id);

   
    if ($request->hasFile('image')) {
        $img = $request->file('image');
        $ext = $img->getClientOriginalExtension();
        $name = uniqid() . '.' . $ext;
        $img->move(public_path('uploads/students'), $name);
        $student->image = $name;
    }

   
    $student->update([
        'name' => $request->name,
        'email' => $request->email,
        'address' => $request->address,
        'gender' => $request->gender,
        'grade' => $request->grade,
    ]);

   
    $student->save();

    return redirect()->route('students.index');
}


}
