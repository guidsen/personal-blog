@extends('dashboard.template')

@section('include-navbar', false)
@section('container-class', 'col-md-4 col-md-offset-4')

@section('content')
    <div class="panel login-panel panel-primary">
        <div class="panel-heading">Login to the Administration Dashboard</div>
        <div class="panel-body">
            @if($errors->has('message'))
                <div class="alert alert-danger">{{$errors->first('message')}}</div>
            @endif

            <form action="login" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="form-group">
                    <p class="text-danger">{{ $errors->first('email') }}</p>
                    <input name="email" class="form-control" type="text" placeholder="Email">
                </div>
                <div class="form-group">
                    <p class="text-danger">{{ $errors->first('password') }}</p>
                    <input name="password" class="form-control" type="password" placeholder="Password">
                </div>
                <input class="btn btn-primary btn-block" type="submit" value="Login">
            </form>
        </div>
    </div>
@stop