@extends('layouts.master')
@section('title','create')
@section('content')
    <h1 class="text-center text-muted" >Payment Portal</h1>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>
        <style>
            body {
                background-color: #bce8ff
            }

            .container {
                margin-top: 40px;
                margin-bottom: 40px
            }

            img {
                width: 100%
            }

            .card-title {
                justify-content: space-between;
                margin-top: 25px
            }

            .register {
                font-size: 10px;
                position: relative;
                bottom: 5px
            }

            .cvc {
                width: 2.5em;
                position: absolute
            }

            input {
                border: none;
                padding-left: 4px;
                background-color: #f7f1f1;
                font-size: 15px
            }

            .card-body {
                background-color: #f7f1f1
            }

            .footer {
                background-color: #00BCD4;
                color: white
            }

            .footer:hover {
                cursor: pointer;
                background-color: #0097A7
            }

            .numbr {
                border-bottom: 1px solid #c1bcbc;
                padding-bottom: 8px
            }

            .line2 {
                border-bottom: 1px solid #c1bcbc;
                padding-bottom: 8px;
                padding-left: 0px
            }

            input.focus,
            input:focus {
                outline: 0;
                box-shadow: none !important
            }

            .numbr.numbr.hover,
            .numbr:hover {
                border-bottom: 1px solid aqua
            }

            .line2.hover,
            .line2:hover {
                border-bottom: 1px solid aqua
            }

            .fa-lock {
                margin-right: 10px
            }

            .order {
                margin-top: 10px
            }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </div>
        </style>
    </head>

    <div class="container-fluid">
        <div class='container'>
            <div class="card mx-auto col-md-5 col-8 mt-3 p-0"> <img class='mx-auto pic' src="image/1Dolphin-Cove-natali-.jpg" />

<?php $total=0?>
{{--                {{$pt}}--}}
@if($ptype=="cash")
                @foreach($data as $info)
                <div class="card-title d-flex px-4">
                    <p class="item text-muted">{{$info->programme_name}}</p>
                    <p>{{$info->cost}}</p>
                    <?php $total=$total+$info->cost ?>
                </div>
                    @endforeach
                <div class="card-body">
                    <p class="text-muted">Your payment details</p>
                    <p class="item text-muted">Name</p>
                    <p>{{$gname}}</p>
                    <p class="item text-muted">Total Cost</p>
                    <p>{{$total}}</p>
                    <div class="numbr mb-3"> <i class=" col-1 text-muted p-0"></i> <input class="col-10 p-0" type="text" placeholder="Cash Received"> </div>
                </div>


@elseif($ptype=="credit")

{{--    Enter staement--}}

@endif
                <div class="footer text-center p-0">
                    <div class="col-lg-12 col-12 p-0">
                        <p class="order">Confirm Payment</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
@endsection
