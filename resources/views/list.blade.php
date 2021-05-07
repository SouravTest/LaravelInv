@if(session()->has('user'))
<x-Auth />
<center>Welcome : {{session('user')}}</center>
<h3>List Of all User </h3>
<a href="reg">Add new</a>


<h4 style="color:blue">{{session('message')}}</h4>


<table border="1" align="center">
    <thead>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>ADDRESS</th>
        <th>ACTION</th>
    </thead>

    @foreach($members as $member)
    <tbody>
        <tr>
            <td>{{$member['id']}}</td>
            <td>{{$member['name']}}</td>
            <td>{{$member['email']}}</td>
            <td>{{$member['address']}}</td>
            <td><a href="edit/{{$member['id']}}">Edit</a>
                <a href="delete/{{$member['id']}}">Delete</a>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>

<br><br><br>
<a href="/logout">Logout</a>

@else
<script>window.location="/login";</script>
@endif