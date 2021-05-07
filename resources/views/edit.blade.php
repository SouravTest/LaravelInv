@if(session()->has('user'))
<h3>Update Details</h3>
<a href="/list">Back</a><br><br>
<form action="/edit" method="POST">
    @CSRF

    <input class="form-control" type="hidden" name="id" value="{{$data['id']}}"><br><br>
    <input class="form-control" type="text" name="name" value="{{$data['name']}}"><br><br>
    <input class="form-control" type="text" name="email" value="{{$data['email']}}"><br><br>
    <input class="form-control" type="text" name="address" value="{{$data['address']}}"><br><br>
    <button type="submit">Edit</button>
</form>

@else
  <script>window.location="/login";</script>
@endif