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
            return Validator::make($data, [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
                'serialNr' => 'required|string|max:255|exists:stashes|unique:users',
                'street' => 'required|string|max:255',
                'nr' => 'required|integer',
                'city' => 'required|string|max:255',
                'postcode' => 'required|integer|numeric',

            ],[
                'required'=>'Dit veld is verplicht.',
                'email.unique'=>'Er is al een account met dit email adres.',
                'min'=>'Het wachtwoord moet minstens 8 karakters bevatten.',
                'confirmed'=>'de wachtwoorden komen niet overeen.',
                'serialNr.exists'=>'Het ingevulde serienummer bestaat niet.',
                'serialNr.unique'=>'Deze stash is al geregistreerd.',
                'numeric'=>'Dit moet een getal zijn.',
                'integer'=>'Dit moet een getal zijn.'

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
        //TODO check if serialNr exists in db stashes and give feedback

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
