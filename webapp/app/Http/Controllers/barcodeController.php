<?php

namespace App\Http\Controllers;

use App\barcode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class barcodeController extends Controller
{
    public function index(){
        return view('barcode.index');
    }
    public function add(){
        barcode::insert();
    }
    //
}
