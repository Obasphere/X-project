<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
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
     * @return \Illuminate\Http\Response
     */
    
    //public function index()
    //{
    //    return view('home');
    //}

    public function index()
    {
        $quizapps = Question::all();
        $data = [
            'quizapps' => $quizapps
        ];

        return view('quizapps', $data);
    }

    public function categories()
    {
        return view('categories');
    }

}

