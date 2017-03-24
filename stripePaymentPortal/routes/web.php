<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

Route::get('/login/customer', function () {
    return view('login.customer');
});

Route::get('/login/company', function () {
    return view('login.company');
});

Route::get('/home/company', function () {
    return view('home.company');
});

Route::get('/home/customer', function () {
    return view('home.customer');
});

Route::get('/paymentHistory/customer', function () {
    return view('paymentHistory.customer');
});

Route::get('/paymentHistory/company', function () {
    return view('paymentHistory.company');
});

Route::get ( '/', function () {
    return view ( 'welcome' );
} );

Route::post ( '/', function (Request $request) {
    \Stripe\Stripe::setApiKey ( 'sk_test_JIf76gbbm2nNPNutY8faknSx' );
    try {
        \Stripe\Charge::create ( array (
            "amount" => 300 * 100,
            "currency" => "usd",
            "source" => $request->input ( 'stripeToken' ), // obtained with Stripe.js
            "description" => "Test payment."
        ) );
        Session::flash ( 'success-message', 'Payment done successfully !' );
        return Redirect::back ();
    } catch ( \Exception $e ) {
        Session::flash ( 'fail-message', "Error! Please Try again." );
        return Redirect::back ();
    }
} );

Route::get('/serverSide', [
    'as'   => 'serverSide',
    'uses' => function () {
        $users = App\Data::all();
        return Datatables::of($users)->make();
    }
]);