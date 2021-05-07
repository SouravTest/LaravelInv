@extends('layouts.app')
@section('content')

<h3>Admin Login</h3> <br>
<h4 style="color:green">{{session('message')}}</h4>
<form action="login" method="POST">
    @CSRF
    <input class="form-control" type="text" name="email" placeholder="email" value="{{old('email')}}"><br><br>
    <input class="form-control" type="password" name="password" placeholder="password"><br><br>
    <button class="btn-success btn" type="submit">Login</button>
</form>

@endsection