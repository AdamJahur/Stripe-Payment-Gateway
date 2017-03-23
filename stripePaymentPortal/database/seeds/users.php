<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete(); //Clears Outs the table

        DB::table('users')->insert([
            'name' => 'Nick',
            'email' => 'none@none.com',
            'password' => 'heyguys'
        ]);
    }
}
