<div class="form-group row">
    <label for="title" class="col-md-4 col-form-label text-md-right">Title Post</label>

    <div class="col-md-6">
        <input id="title" type="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $post->title ?? null) }}">

        @foreach($errors->get('title') as $error) 
            <span class="invalid-feedback" role="alert">
                <strong>{{ $error }}</strong>
            </span>
        @endforeach
    </div>
</div>

<div class="form-group row">
    <label for="body" class="col-md-4 col-form-label text-md-right">Body Post</label>

    <div class="col-md-6">
        <input id="body" type="title" class="form-control @error('body') is-invalid @enderror" name="body" value="{{ old('title', $post->body ?? null) }}">

        @foreach($errors->get('body') as $error) 
            <span class="invalid-feedback" role="alert">
                <strong>{{ $error }}</strong>
            </span>
        @endforeach
    </div>
</div>