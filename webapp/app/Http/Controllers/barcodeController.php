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
            $deliveredPackages=DB::table('barcodes')->where('user_id',Auth::user()->id)->where('is_delivered',1)->where('deleted_at',NULL)->get();
            $notDeliveredPackages=DB::table('barcodes')->where('user_id',Auth::user()->id)->where('is_delivered',0)->where('deleted_at',NULL)->get();
            return view('barcode.overview',compact('deliveredPackages','notDeliveredPackages'));
        }
        else{
            return redirect('login');
        }

    }
    public function add(storeBarcode $bcode){
        if(Auth::check()) {
            $data = new barcode();
            $data->barcode = $bcode->barcode;
            $data->description=$bcode->description;
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
    public function delete(barcode $id){
        if(Auth::check()) {
            $userid = Auth::user()->id;
            if ($userid===$id->user_id) {
                $id->delete();
                return redirect('/home');
            }

        }
        else{
            return redirect('/home');
        }


    }
    //
}
