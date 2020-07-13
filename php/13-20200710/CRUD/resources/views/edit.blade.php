<h4>Edit Phone</h4>
<form action="/phones/{{$phone->id}}" method="POST">
<input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div>
<label for="name">Name</label>
<input type="text" name="name" id="name" value="{{$phone->name}}">
</div>
<div>
<label for="price">Price</label>
<input type="text" name="price" id="price" value="{{$phone->price}}">
</div>
<div>
<label for="color">Color</label>
<input type="text" name="color" id="color" value="{{$phone->color}}">
</div>
<button type="submit">Update</button>
</form>