@extends('layout')

@section('content')
    <h2>@yield('title')</h2>
    <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">@yield('buttonTitle')</button>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Fill in the information</h4>
                </div>
                <div class="modal-body">
                    <form action="/loginme" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        USERNAME: <input type="text" name="username"><br/>
                        PASSWORD: <input type="password" name="password"><br/>
                        <input type="submit" name="login" value="Login">
                </div>
                <a href="./loginCompany"><p>Click here for the company login page</p></a>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@stop