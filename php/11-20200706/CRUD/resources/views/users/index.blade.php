@foreach($users as $user)
<div style="display: flex">
Day la user <a href="users/{{$user->id}}"> {{$user->name}}</a>
<form action="users/{{$user->id}}" method="POST">
<input type="hidden" name="_method" value="DELETE">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<button type="submit">Delete</button>

</form>
<form action="users/{{$user->id}}/edit" method="GET">
<button type="submit">Edit</button>
</form>
<form action="users/{{$user->id}}" method="GET">
<button type="submit">Show</button>
</form>
</div>
<hr>
@endforeach
