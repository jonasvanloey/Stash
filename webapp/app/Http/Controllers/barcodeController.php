<?php

namespace App\Http\Controllers;

use App\barcode;
use App\Http\Requests\storeBarcode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class barcodeController extends Controller
{
    public function index(){
        return view('barcode.index');
    }
    public function overview(){
        $barcodes = DB::table('barcodes')->where('user_id',Auth::user()->id)->orderBy('updated_at')->get();
        return view('barcode.overview',compact('barcodes'));
    }
    public function add(storeBarcode $bcode){
//        var_dump(Auth::user()->id);
        $data = new barcode();
        $data->barcode = $bcode->barcode;
        $data->user_id = Auth::user()->id;
        $data->save();
        return redirect('/home');
    }
    //
}
