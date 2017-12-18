<?php

namespace App\Http\Controllers;

use App\stash;
use Illuminate\Http\Request;

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
    public function index()
    {
        //stash::where('serialNr',$data['serialNr'])->update(['user_id'=>Auth::user()->id]);

        return view('home');
    }
}
