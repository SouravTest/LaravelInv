@if(session()->has('user'))
<x-Auth />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<div class="container m-5">
<h3>Register User</h3> <a href="/list" class="btn btn-info">Show List</a><br><br>
<h4 style="color:green">{{session('message')}}</h4>
<div class="row">
<div class="col-md-4 offset-md-4 card p-5 bg-primary">
<form action="add" method="POST">
    @CSRF
    <!-- <input class="form-control" type="text" name="id"> -->
    <input class="form-control" type="text" name="name" placeholder="Name"><br><br>
    <input class="form-control" type="text" name="email" placeholder="Email"><br><br>
    <input class="form-control" type="text" name="address" placeholder="Address"><br><br>
    <button class="btn-success btn" type="submit">Register</button>
</form>
</div>    
</div>    
</div>

@else
<script>window.location="/login";</script>
@endif