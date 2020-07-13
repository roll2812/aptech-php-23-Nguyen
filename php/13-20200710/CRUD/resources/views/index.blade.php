<h4>Phones</h4>
@foreach($phones as $phone)
Day la dien thoai <strong>{{$phone->name}}</strong>
<div style="display: flex;">
<form action="/phones/{{$phone->id}}" method="GET">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<button type="submit">Show</button>
</form>
<form action="/phones/{{$phone->id}}/edit" method="GET">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<button type="submit">Edit</button>
</form>
<form action="/phones/{{$phone->id}}" method="POST">
<input type="hidden" name="_method" value="DELETE">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<button type="submit">Delete</button>
</form>
</div>
<br>
<hr>
@endforeach
<form action="/phones/create" method="GET">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<button type="submit">Create</button>
</form>