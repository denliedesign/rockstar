<!-- FORM -->
<form action="/contents" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="page">Page</label>
        <input id="page" type="text" class="form-control" name="page"
               value="{{ old('page') ?? $content->page }}">
        <div>{{ $errors->first('page') }}</div>
    </div>

    <div class="form-group">
        <label for="text">Text Content</label>
        <textarea name="text" cols="30" rows="10" class="form-control"
                  id="text-textarea">{{ old('text') ?? $content->text }}</textarea>
        <div>{{ $errors->first('text') }}</div>
    </div>

    @csrf
    <div class="d-flex justify-content-around mt-2">
        <button type="submit" class="btn btn-primary">Add Text</button>
    </div>
</form>
<!-- END FORM -->

