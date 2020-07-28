<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Http\Requests\StoreCourse;
use App\User;

class CourseController extends Controller
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
            $courses = Course::paginate();
            return view('course.list', compact('courses'));
        }else{
            return view('home');
        }
    }

    public function create()
    {
        if(auth()->user()->type == 1){
            return view('course.create');
        }else{
            return view('home');
        }
    }

    public function store(StoreCourse $request)
    {
        if(auth()->user()->type == 1){
            Course::create($request->all());
            return redirect()->back()->with('success', 'Curso cadastrado com sucesso.');
        }else{
            return view('home');
        }
    }


    public function edit($id)
    {
        $course = Course::find($id);

        return view('course.edit', compact('course'));
    }

    public function update($id, StoreCourse $request)
    {
        $course = Course::find($id);
        $course->update($request->all());
        return redirect()->back()->with('success', 'Curso editado com sucesso.');
    }


    public function show($id)
    {
        $data['essay'] = Essay::find($id);

        return \PDF::loadView('essay.pdf', $data)
                // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
                ->stream('redacao.pdf');
    }

    public function delete($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->back()->with('success', 'Curso deletado com sucesso.');
    }
}