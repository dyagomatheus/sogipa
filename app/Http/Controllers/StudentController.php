<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;
use App\Http\Requests\StoreStudent;
use App\User;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->type == 1){
            $students = Student::paginate();
            return view('student.list', compact('students'));
        }else{
            return view('home');
        }
    }

    public function create()
    {
        if(auth()->user()->type == 1){
            $courses = Course::get();
            return view('student.create', compact('courses'));
        }else{
            return view('home');
        }
    }

    public function store(StoreStudent $request)
    {
        if(auth()->user()->type == 1){
            $student = Student::create($request->all());
            $student->validation_code = sha1(time());
            $student->save();
            return redirect()->back()->with('success', 'Certificado cadastrado com sucesso.');
        }else{
            return view('home');
        }
    }

    public function edit($id)
    {
        $student = Student::find($id);
        $courses = Course::get();

        return view('student.edit', compact('student', 'courses'));
    }

    public function update($id, StoreStudent $request)
    {
        $student = Student::find($id);
        $student->update($request->all());
        return redirect()->back()->with('success', 'Certificado editado com sucesso.');
    }


    public function show($id)
    {
        $data['certificate'] = Student::find($id);

        return view('student.pdf', $data);
        // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
        // ->stream('student.pdf');
    }

    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->back()->with('success', 'Certificado deletado com sucesso.');
    }
}