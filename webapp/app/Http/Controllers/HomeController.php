<?php

namespace App\Http\Controllers;

use App\stash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $barcodes = DB::table('barcodes')->where('user_id',Auth::user()->id)->get();
        return view('home',compact('barcodes'));
    }
}
