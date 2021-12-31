<?php

namespace App\Http\Controllers;

use App\Models\Budjet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home/index');
    }
    public function about()
    {
        return view('home/about');
    }
    public function faq()
    {
        return view('home/faq');
    }
    public function tataCara()
    {
        return view('home/tatacara');
    }

    public function announcement()
    {
        $budjets = Budjet::paginate(20);
        return view('home/announcement',compact('budjets'));
    }
}
