<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            BarcodeSeeder::class,

        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
