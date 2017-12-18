<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarcodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('barcodes')->insert(
            ['barcode' => '323211898200003518413030',
            'user_id' =>1]
        );DB::table('barcodes')->insert(
            ['barcode' => '323211898200003518413031',
            'user_id' =>1]
        );
    }
}
