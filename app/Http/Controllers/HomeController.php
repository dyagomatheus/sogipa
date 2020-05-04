<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Essay;
use App\Http\Requests\StoreEssay;

class HomeController extends Controller
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
            $essays = Essay::where('status', '!=', true)->get();
            return view('essay.list', compact('essays'));
        }

        $essay = Essay::where('user_id', auth()->user()->id)->first();
        if ($essay && $essay->time_left > 0){
            $start_time = date_create($essay->start_time);
            $now =  date_create(date('Y-m-d H:i:s'));

            $interval = date_diff($now, $start_time);

            // dd($essay->start_time);
            // $left_time = date('Y-m-d H:i:s')->date_diff($essay->start_time);
            $diff = $interval->s + ($interval->i * 60) + ($interval->h * 3600);
            $essay->start_time = now();
            $essay->time_left = $essay->time_left - $diff;
            $essay->save();
            return view('essay.create', compact('essay'));
        }elseif(!$essay || $essay->time_left <= 0){
            return view('home');
        }
    }

    public function initAvaliation()
    {
        $essay = Essay::where('user_id', auth()->user()->id)->first();
        if ($essay && $essay->time_left > 0){
            $start_time = date_create($essay->start_time);
            $now =  date_create(date('Y-m-d H:i:s'));

            $interval = date_diff($now, $start_time);

            // dd($essay->start_time);
            // $left_time = date('Y-m-d H:i:s')->date_diff($essay->start_time);
            $diff = $interval->s + ($interval->i * 60) + ($interval->h * 3600);
            $essay->start_time = now();
            $essay->time_left = $essay->time_left - $diff;
            $essay->save();
           return view('essay.create', compact('essay'));
        }elseif(!$essay){
            $essay = Essay::create([
                'essay' => null, 
                'user_id' => auth()->user()->id, 
                'status' => true, 
                'start_time' => date('Y-m-d H:i:s'), 
                'time_left' => 9000
            ]);
        return view('essay.create', compact('essay'));
        }elseif($essay && $essay->time_left <= 0){
            return view('home');
        }


    }

    public function store(StoreEssay $request)
    {
        $text = strip_tags($request->essay);
        $count = strlen($text);
        if($count < 1000){
            \Session::put('essay', $request->essay);
            \Session::put('theme', $request->theme);

            return redirect()->back()->with('error', 'Sua redação deve ter entre 1000 e 5000 Caracteres. Você digitou '. $count);
        }elseif($count > 5000){
            \Session::put('essay', $request->essay);
            \Session::put('theme', $request->theme);

            return redirect()->back()->with('error', 'Sua redação deve ter entre 1000 e 5000 Caracteres. Você digitou '. $count);
        }

        $essay = Essay::where('user_id', auth()->user()->id)->first();
        $essay->essay = $request->essay;
        $essay->text = $request->theme;
        $essay->status = false;

        $essay->save();

        return view('home');
    }

    public function show($id)
    {
        $essay = Essay::find($id);

        return \PDF::loadView('essay.pdf', compact('essay'))
                // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
                ->stream('redacao.pdf');
    }
}