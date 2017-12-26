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
        if(Auth::check()){
            return view('barcode.index');
        }
        else{
            return redirect('login');
        }
    }
    public function overview(){
        if(Auth::check()){
            $barcodes = DB::table('barcodes')->where('user_id',Auth::user()->id)->orderBy('updated_at','DESC')->get();
            return view('barcode.overview',compact('barcodes'));
        }
        else{
            return redirect('login');
        }

    }
    public function add(storeBarcode $bcode){
//        var_dump(Auth::user()->id);
        if(Auth::check()) {
            $data = new barcode();
            $data->barcode = $bcode->barcode;
            $data->user_id = Auth::user()->id;
            $data->save();
            return redirect('/home');
        }
        else
        {
            return redirect('login');
        }
    }
    public function delivered(){
        if(Auth::check()){
            $deliveredPackages=DB::table('barcodes')->where('user_id',Auth::user()->id)->where('is_delivered',1)->get();
            return view('barcode.delivered',compact('deliveredPackages'));
        }
        else
        {
            return redirect('login');
        }

    }
    public function notDelivered(){
        if(Auth::check()){
            $notDeliveredPackages=DB::table('barcodes')->where('user_id',Auth::user()->id)->where('is_delivered',0)->get();
            return view('barcode.notDelivered',compact('notDeliveredPackages'));
        }
        else
        {
            return redirect('login');
        }
    }
    //
}
