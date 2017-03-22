<?php

use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Invoice')->delete(); //Clears Outs the table

        DB::table('Invoice')->insert([
            'Account #' => '123456',
            'Amount $' => '$5000.00',
            'Payment Type' => 'Mastercard',
            'Date Paid' => '2017-01-05',
            'Service/Receipt #' => 'Replace Roofing',
            'Service Date' => '2017-01-03',
            'Username' => 'GrizzlyBearAdam'
        ]);

        DB::table('Invoice')->insert([
            'Account #' => '654321',
            'Amount $' => '$9.99',
            'Payment Type' => 'AMEX',
            'Date Paid' => '2017-01-09',
            'Service/Receipt #' => 'Car Charger',
            'Service Date' => '2017-01-07',
            'Username' => 'BillyBob'
        ]);

        DB::table('Invoice')->insert([
            'Account #' => '098765',
            'Amount $' => '$25.00',
            'Payment Type' => 'Discover',
            'Date Paid' => '2017-01-18',
            'Service/Receipt #' => 'T-shirt',
            'Service Date' => '2017-01-16',
            'Username' => 'NicksMavs'
        ]);

        DB::table('Invoice')->insert([
            'Account #' => '123456',
            'Amount $' => '$122.52',
            'Payment Type' => 'VISA Credit',
            'Date Paid' => '2017-02-17',
            'Service/Receipt #' => 'Best Buy',
            'Service Date' => '2017-02-22',
            'Username' => 'GrizzlyBearAdam'
        ]);

        DB::table('Invoice')->insert([
            'Account #' => '123456',
            'Amount $' => '$629.93',
            'Payment Type' => 'VISA Debit',
            'Date Paid' => '2017-03-18',
            'Service/Receipt #' => 'Home Depo',
            'Service Date' => '2017-03-23',
            'Username' => 'GrizzlyBearAdam'
        ]);


        DB::table('Invoice')->insert([
            'Account #' => '098765',
            'Amount $' => '$2000.00',
            'Payment Type' => 'Discover',
            'Date Paid' => '2017-03-20',
            'Service/Receipt #' => 'UCF',
            'Service Date' => '2017-03-18',
            'Username' => 'NicksMavs'
        ]);
    }
}
