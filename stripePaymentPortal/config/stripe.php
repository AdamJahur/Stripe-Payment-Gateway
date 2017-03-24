<?php
/**
 * Created by PhpStorm.
 * User: adamjahur
 * Date: 3/23/17
 * Time: 6:59 PM
 */

require_once('../stripe-php/init.php');

$stripe = array(
    "secret_key"      => "sk_test_JIf76gbbm2nNPNutY8faknSx",
    "publishable_key" => "pk_test_RetUOlVlEE1jWEeQ2WEkUqIf"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);

?>