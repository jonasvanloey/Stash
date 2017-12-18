<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(
            ['name' => 'guy van goethem',
            'city'=>'Antwerpen',
            'serialNr'=>'0123456789',
            'postcode'=>'2000',
            'street'=>'jacob de roorestraat',
            'nr'=>2,
            'email'=>'jvanloey@gmail.com',
            'password'=>'wachtwoord']
        );
    }
}
