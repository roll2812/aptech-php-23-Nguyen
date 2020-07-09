<h1>Edit User</h1>
<form action="/users/{{$user->id}}" method="POST">
<input type="hidden" name="_method" value="PATCH">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div>
    <label for="name">Username</label>
    <input type="text" value="{{$user->name}}" name="name" id="name">
</div>
<div>
    <label for="email">Email</label>
    <input type="email" value="{{$user->email}}" name="email" id="email">
</div>
<div>
    <label for="password">Password</label>
    <input type="password" value="{{$user->password}}" name="password" id="password">
</div>
<button type="submit">Edit</button>
</form>