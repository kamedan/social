@extends('layouts.master')

@section('content')
    <div class="row">
        @include('includes.info-box')
        <div class="col-md-6">
            <h3>Sign Up</h3>
            <hr>
            <form action="{{route('signup')}}" method="post">
                <div class="form-group {{$errors->has('email') ?  'has-error' : ''}}">
                    <label for="email">Email</label>
                    <input class="form-control " type="text" name="email" id="email" value="{{Request::old('email')}}">
                </div>
                <div class="form-group {{$errors->has('first_name') ?  'has-error' : ''}}">
                    <label for="name">Name</label>
                    <input class="form-control " type="text" name="first_name" id="first_name" value="{{Request::old('first_name')}}">
                </div>

                <div class="form-group {{$errors->has('password') ?  'has-error' : ''}}">
                    <label for="password">Password</label>
                    <input class="form-control " type="password" name="password" id="password">
                </div>
                <button class="btn btn-primary">Submit</button>
                <input type="hidden" value="{{Session::token()}}" name="_token">
            </form>
        </div>

        <div class="col-md-6">
            <h3>Sign In</h3>
            <hr>
            <form action="{{route('signin')}}" method="post">
                <div class="form-group {{$errors->has('email') ?  'has-error' : ''}}">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" id="email">
                </div>

                <div class="form-group {{$errors->has('password') ?  'has-error' : ''}}">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button class="btn btn-primary">Submit</button>
                <input type="hidden" value="{{Session::token()}}" name="_token">
            </form>
        </div>
    </div>
@endsection
