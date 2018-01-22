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
        //does absolutely nothing
        if(Auth::check()){
            return view('barcode.index');
        }
        else{
            return redirect('login');
        }
    }
    public function overview(){
        if(Auth::check()){
            //check if user is authenticated and return homepage with delivered and undelivered packages
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
            //check if user is authenticated and add barcode if barcode gets trough storeBarcode request
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

    public function delete(barcode $id){
        if(Auth::check()) {
            //check if user is authenticated then check if deleted barcode belongs tothis user then soft delete it
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
