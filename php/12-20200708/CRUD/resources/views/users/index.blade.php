@foreach($users as $user)
<div style="display: flex">
Day la user:  <strong>{{$user->name}}</strong> 
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
<form action="users/create" method="GET">
<!-- <input type="hidden" method="_token" value="{{ csrf_token() }}"> -->
<button type="submit">Create</button>
</form>