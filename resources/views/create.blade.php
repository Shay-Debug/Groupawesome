@extends('layouts.master')
@section('title','create')
@section('content')
    <h1 class="text-center text-muted" >Create</h1>

    <br>
    <div class="container-fluid flex align-item-center justify-center">
        <form method="post" action="{{route('/create')}}" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Guest Type</label>
                <div class="col-sm-4">
                <select class="form-control" >
                    <option value="t">Tour Company</option>
                    <option value="w"> Walk In</option>
                </select>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Enter</button>

{{--            <div class="form-group row">--}}
{{--                <label class="col-sm-2 col-form-label">Guest Name</label>--}}
{{--                <div class="col-sm-4">--}}
{{--                    <input type="text" class="form-control" name="guestid" placeholder="Guest Name">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="form-group row">--}}
{{--                <label class="col-sm-2 col-form-label">Model Number</label>--}}
{{--                <div class="col-sm-4">--}}
{{--                    <input type="text" class="form-control" name="pmnumber" placeholder="Model Number">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="form-group row">--}}
{{--                <label class="col-sm-2 col-form-label">Brand Name</label>--}}
{{--                <div class="col-sm-4">--}}
{{--                    <input type="text" class="form-control" name="pbrand" placeholder="Brand Name">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="form-group row">--}}
{{--                <label class="col-sm-2 col-form-label">Cost</label>--}}
{{--                <div class="col-sm-4">--}}
{{--                    <input type="text" class="form-control" name="pcost" placeholder="Product Cost">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <button class="btn btn-primary" type="submit">Submit form</button>--}}
{{--            <button type="button" class="btn btn-danger" onclick="window.location.href='{{url('/index')}}';">Cancel</button>--}}

{{--            @foreach ($errors->all() as $error)--}}
{{--                <div class="alert alert-warning"> <strong>Warning!</strong> {{ $error }}    </div>--}}
{{--            @endforeach--}}

{{--            <?php $ses = session()->get('msg') ?>--}}
{{--            @if($ses!='')--}}
{{--                <div class="alert alert-warning"><strong>Warning!</strong> {{ session()->get('msg') }} </div>--}}
{{--                {{session()->forget('msg')}}--}}
{{--            @endif--}}
        </form>
    </div>
@endsection
