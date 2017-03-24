@extends('paymentLayout')

@section('title', 'Company History')
@section('sectionName', 'Search for Accounts')
@section('content')
<table>
    <tr>
        <th>Account #</th>
        <th>Amount $$</th>
        <th>Payment Type</th>
        <th>Date Paid</th>
        <th>Service/Receipt #</th>
        <th>Service Date</th>
    </tr>
    <tr>
        <td>239920</td>
        <td>$850</td>
        <td>Visa</td>
        <td>04/17/17</td>
        <td>Yard Work</td>
        <td>08/08/08</td>
    </tr>
    <tr>
        <td>556834</td>
        <td>$10.90</td>
        <td>Debit</td>
        <td>04/55/56</td>
        <td>345215</td>
        <td>02/08/65</td>
    </tr>
    <tr>
        <td>904381</td>
        <td>$5000</td>
        <td>Mastercard</td>
        <td>01/01/01</td>
        <td>Clean up house</td>
        <td>04/11/10</td>
    </tr>

</table>

@stop