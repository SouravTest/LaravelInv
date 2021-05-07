<h1>Login</h1>

<!-- @if($errors->any())
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif -->
<form action="users" method="POST" class="form-control">
    @csrf

    <input class="form-control" type="text" name="username" placeholder="User Name" value="{{old('username')}}">
    <span style="color:red">@error('username'){{$message}}@enderror</span>
    <br>
    <br>
    <input class="form-control" type="password" name="password" placeholder="Password" value="{{old('password')}}">
    <span style="color:red">@error('password'){{$message}}@enderror</span>
    <br>
    <br>
    <button class="form-control">Login</button>
</form>