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
          <div class='table-responsive'>
            <table class='table table-bordered'>
              <tr>
              <td>{{'Customer Name'}}</td>
              <td>{{$user['guest_name']}}</td>
              </tr>
              @if(session('type')=='walkin')
              <tr>
              <td>{{'Hotel'}}</td>
              <td>{{$hotel[0]['hotel_name']}}</td>
              </tr>
              <tr>
              <td>{{'Tour Company'}}</td>
              <td>{{$tour[0]['tour_comp_name']}}</td>
              </tr>
              @endif
              @php
              $total=0;
              @endphp
              <form action="/pay" method="post">
              @csrf
              <th>Programme Name</th>
              <th>Number of Adults</th>
              <th>Cost of Adults</th>
              <th>Number of Children</th>
              <th>Children cost</th>
              <th>Total</th>
              @foreach($booking as $booking_info)
              <tr>
                <td>{{$booking_info['programme_name']}}</td>
                <td>{{$booking_info['adults_num']}}</td>
                <td>{{$booking_info['adult_cost']}}</td>
                <td>{{$booking_info['child_num']}}</td>
                <td>{{$booking_info['child_cost']}}</td>
                <td>{{$booking_info['total_cost']}}</td>
                <td><button type="submit" name="remove_ex" value="{{$booking_info['programme_id']}}"><i class="fa fa-times"></i></button></td>
                @php
                $total=$total+$booking_info['total_cost'];
                @endphp
              </tr>
              @endforeach
              <input type="hidden" name="booking_id" value="{{$booking[0]['booking_id']}}">
              <input type="hidden" name="cost" value="{{$booking_info['total_cost']}}">
              </form>
              <tr>
                <td><h5><b>{{'Total'}}</b></h5></td>
                <td><h5><b>{{$total}}</b></h5></td>
              </tr>
              <tr>
              @if(Session('type')=='walkin')
              <td><a href="/tourguest/{{$booking[0]['booking_id']}}"><button type="button"class="btn btn-primary">Add Excurison</button></a></td>
              @else
              <td><a href="/walkin/{{$booking[0]['booking_id']}}"><button type="button"class="btn btn-primary">Add Excurison</button></a></td>
              @endif
              <td><form action="/deletebooking" method="post">
                @csrf
                <button type="submit" class="btn btn-danger value="{{$booking[0]['booking_id']}}">Cancel booking</button>
                <input type="hidden" name="deletebook" value="{{$booking[0]['booking_id']}}">
                </form></td>
              </tr>
            </table>
          </div>
        </div>
    </div>
@endsection
