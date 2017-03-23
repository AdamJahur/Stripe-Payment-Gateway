<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
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
            'userName' => 'NicksMavs',
            'password' => 'heyguys'
        ]);

        DB::table('users')->insert([
            'name' => 'Adam',
            'email' => 'somethign@none.com',
            'userName' => 'GrizzlyBearAdam',
            'password' => 'hello'
        ]);
    }
}
