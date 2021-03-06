@extends('homeLayout')

@section('title', 'customerHome')
@section('sectionName', 'Profile')


@section('content')
    <nav>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="../paymentHistory/customer.blade.php">Payment History</a></li>
            <li><a href="../customerProfile.blade.php">profile</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
        </div>
        </nav>
        <div class="nav navbar-nav navbar-right">
            <img src="" alt="Img">
        </div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h4 id="company">Best Buy</h4>
            <h4 id="address">11 Orlando Way, Orlando FL, 32828</h4>
            <h4 id="phone">321-852-9658</h4>
            <h4 id="email">none@none.com</h4>
        </div>
        <div class="col-md-4">
            <img src="https://pbs.twimg.com/profile_images/814925712792555520/EydPXyS9.jpg" style="width: 130px; height: 130px; margin-left: 50px;">
        </div>
        <div class="col-md-4">
            <h4 id="name">John Smith</h4>
            <h4 id="account">Account Number: 4392952</h4>
            <h4 id="due">Total Amount Due: $700</h4>
        </div>
    </div>
</div>


<div class="container" style="margin-top: 30px;">
    <div class="row">
        <div class="col-md-12">
            {{--<table style="width:100%; table,th,td{border: 1px solid black; border-collapse: collapse;}--}}
    {{--}--}}
    {{--th, td {--}}
        {{--padding: 5px;--}}
        {{--text-align: left;--}}
    {{--}">--}}
            <table>
                <tr>
                    <th>Money Owed</th>
                    <th>Due Date:</th>
                    <th>Date Posted:</th>
                </tr>
                <tr>
                    <td>$700</td>
                    <td>03/18/17</td>
                    <td>02/18/17</td>
                </tr>
            </table>

        </div>
    </div>
</div>

@stop