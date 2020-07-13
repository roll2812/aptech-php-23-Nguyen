<form action="/ckeditor/show" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<textarea  name="ckeditor" id="editor"></textarea>
<button type="submit">Send</button>
</form>
<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>