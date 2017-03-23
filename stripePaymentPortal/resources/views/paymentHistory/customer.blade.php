@extends('paymentLayout')

@section('title', 'Customer History')
@section('sectionName','Profile')
@section('content')
<div class="row">
    <div class="col-md-12">


        <table>
            <tr>
                <th>Amount Due</th>
                <th>Paid Date</th>
                <th>Type of Payment</th>
                <th>Service</th>
            </tr>
            <tr>
                <td>/500</td>
                <td>08/08/08</td>
                <td>Visa</td>
                <td>PS4</td>
            </tr>
            <tr>
                <td>$2000</td>
                <td>01/01/01</td>
                <td>Debit</td>
                <td>Car Payment</td>
            </tr>
            <tr>
                <td>$4000</td>
                <td>02/02/02</td>
                <td>Mastercard</td>
                <td>Boat</td>
            </tr>

        </table>
    </div>
</div>

@stop