<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Student;
use App\Http\Requests\StoreVerse;
use App\User;

class ValidateCertificateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function validateCode($code)
    {
       $certificate = Student::where('validation_code', $code)->first();

       if($certificate){
           return view('student.validate', compact('certificate'));
        }else{
            return view('student.no_validate');
        }
    }

    public function create()
    {
        if(auth()->user()->type == 1){
            $courses = Course::get();
            return view('verse.create', compact('courses'));
        }else{
            return view('home');
        }
    }

    public function store(StoreVerse $request)
    {
        if(auth()->user()->type == 1){
            Verse::create($request->all());
            return redirect()->back()->with('success', 'Informação cadastradas com sucesso.');
        }else{
            return view('home');
        }
    }

    public function edit($id)
    {
        $verse = Verse::find($id);
        $courses = Course::get();

        return view('verse.edit', compact('verse', 'courses'));
    }

    public function update($id, StoreStudent $request)
    {
        $verse = Verse::find($id);
        $verse->update($request->all());
        return redirect()->back()->with('success', 'Certificado editado com sucesso.');
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
        $verse = Verse::find($id);
        $verse->delete();
        return redirect()->back()->with('success', 'Informação deletado com sucesso.');
    }

    public function consult()
    {
        return view('consult-certificate');
    }

    public function viewCertificate(Request $request)
    {
        $certificate = Student::where('cpf', $request->cpf)->first();

        if($certificate){
            return view('student.pdf', compact('certificate'));
         }else{
             return view('student.no_validate');
         }
    }
}