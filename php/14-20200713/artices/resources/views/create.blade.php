<h4>Create new article</h4>
<form action="{{route('articles.store')}}" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div>
<label for="title">Title:</label>
<input type="text" name="title" id="title">
</div>
<div>
<label for="description">Description:</label>
<textarea name="description" id="description" cols="30" rows="5"></textarea>
</div>
<div>
<label for="content">Content</label>
<textarea name="content" id="content" cols="30" rows="30"></textarea>
</div>
<button type="submit">Send</button>
</form>

<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#content' ) )
        .catch( error => {
            console.error( error );
        } );
</script>