<h4>Create New Phone</h4>
<form action="/phones" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div>
<label for="name">Name</label>
<input type="text" name="name" id="name" >
</div>
<div>
<label for="price">Price</label>
<input type="text" name="price" id="price" >
</div>
<div>
<label for="color">Color</label>
<input type="text" name="color" id="color" >
</div>
<button type="submit">Update</button>
</form>