<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Performance;

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
        $performances = Performance::orderBy('id', 'desc')->take(5)->get();
        $mostRecentPerformance = Performance::orderBy('id', 'desc')->take(1)->get()->first();
        $cpuSamples = $performances->pluck('cpu_usage')->toArray();


        return view('home')->with([
            'performances' => $performances,
            'currentPerformance' => $mostRecentPerformance,
            'cpuSamples' => $cpuSamples
        ]);
    }
}
