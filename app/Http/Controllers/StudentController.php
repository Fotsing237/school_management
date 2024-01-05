<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // used to display student list

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students/index', compact('students'));
    }

    // displays form or view to create a student

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/students/create');
    }

    // stores student info to db (nb: create() submits form data to store())

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required',
            'section' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg'
        ]);

        $image = $request->file('image');
        $destinationPath = 'image/';
        $profileImage = date('YmdHis').".".$image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $validateData['image'] = $profileImage;

        $students = Student::create($validateData);

        return redirect('/students');
    }

    // displays a particular student

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students/show', compact('student'));
    }

    // displays the form used to update student info with prefilled existing student data

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students/edit', compact('student'));
    }

    // used to make an update of student info in db (nb: edit() submit form data to update())

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $students = Student::find($id);
        $students->name = $request->input('name');
        $students->email = $request->input('email');
        $students->phone = $request->input('phone');
        $students->section = $request->input('section');
        $students->update();
        
        return redirect('/students')->with('success', 'data updated successfully');
    }

    // used to delete a student from bd

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $student = Student::find($id);
        $student->delete();
        return redirect('/students')->with('success', 'Student deleted successfully.');
    }

    // used to delete all students from bd

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyMany(array $ids){
        Student::destroy($ids);
        return redirect('/students')->with('success', 'Students deleted successfully.');
    }

}
