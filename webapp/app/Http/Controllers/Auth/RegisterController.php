<?php

namespace App\Http\Controllers\Auth;

use App\stash;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        //validation for custom register field
            return Validator::make($data, [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
                'serialNr' => 'required|string|max:255|exists:stashes|unique:users',//serial number of stash has to be unique so a stash can not be registered twice and a stash has to exist
                'street' => 'required|string|max:255',
                'nr' => 'required|integer',
                'city' => 'required|string|max:255',
                'postcode' => 'required|integer|numeric',

            ],
                [//this code returns custom feedback trans() gives translated feedback fr,nl and en
                'required'=>trans('validation.required'),
                'email.unique'=>trans('validation.unique'),
                'min'=>trans('validation.min'),
                'confirmed'=>trans('validation.confirmed'),
                'serialNr.exists'=>trans('validation.serex'),
                'serialNr.unique'=>trans('validation.unique'),
                'numeric'=>trans('validation.numeric'),
                'integer'=>trans('validation.numeric')

            ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
            //addd new user and update stash table with user id
            $data2 = new User();
            $data2->name = $data['name'];
            $data2->email = $data['email'];
            $data2->password = bcrypt($data['password']);
            $data2->city = $data['city'];
            $data2->serialNr = $data['serialNr'];
            $data2->postcode = $data['postcode'];
            $data2->street = $data['street'];
            $data2->nr = $data['nr'];
            $data2->save();

            stash::where('serialNr',$data['serialNr'])->update(['user_id'=>$data2->id]);
            return $data2;



    }

}
