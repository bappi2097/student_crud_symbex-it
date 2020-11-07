<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image'],
            'email' => ['required', 'email', 'unique:students'],
            'programme' => ['required', 'string', 'max:255'],
            'batch' => ['required', 'numeric'],
            'section' => ['required', 'string'],
            'blood_group' => ['required', 'string', 'max:3'],
            'mobile_no' => ['required', 'string'],
            'current_address' => ['required']
        ]);

        if ($request->hasfile("image")) {
            $studentImage = uniqid(11) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('students\images'), $studentImage);
        }

        $data = [
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "image" => $studentImage,
            "email" => $request->email,
            "programme" => $request->programme,
            "batch" => $request->batch,
            "section" => $request->section,
            "blood_group" => $request->blood_group,
            "mobile_no" => $request->mobile_no,
            "current_address" => $request->current_address,
        ];

        if (Student::insert($data)) {
            return redirect()->back()->with('success', 'Student added successfully.');
        } else {
            return redirect()->back()->with('error', 'Something went Wrong!');
        }
    }

    public function storeBulk(Request $request)
    {
        dd($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $this->validate($request, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:students'],
            'programme' => ['required', 'string', 'max:255'],
            'batch' => ['required', 'numeric'],
            'section' => ['required', 'string'],
            'blood_group' => ['required', 'string', 'max:3'],
            'mobile_no' => ['required', 'string'],
            'current_address' => ['required']
        ]);
        $studentImage = null;
        if ($request->hasfile("image")) {
            $studentImage = uniqid(11) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('students\images'), $studentImage);
        }

        $data = [
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "image" => $studentImage ?: $student->image,
            "email" => $request->email,
            "programme" => $request->programme,
            "batch" => $request->batch,
            "section" => $request->section,
            "blood_group" => $request->blood_group,
            "mobile_no" => $request->mobile_no,
            "current_address" => $request->current_address,
        ];

        if ($student->update($data)) {
            return redirect()->back()->with('success', 'Student updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Something went Wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        if ($student->delete()) {
            return redirect()->back()->with('success', 'Student deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Something went Wrong!');
        }
    }
}
