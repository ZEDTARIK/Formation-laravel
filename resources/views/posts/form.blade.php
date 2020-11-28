<div class="form-group row">
    <label for="title" class="col-sm-2">Title Post</label>
    <div class="col-sm-4">
        <input class="form-control"  placeholder="Your Title"  id="title" name="title"  value="{{ old('title', $post->title ?? null) }}" >
    </div>
        @foreach($errors->get('title') as $error)    
            <div class="col-sm-4">
                <span style="color:red;" class="help-block">{{ $error }}</span>
            </div>
        @endforeach
</div>

<div class="form-group row">
    <label for="body" class="col-sm-2">Body Post</label>
    <div class="col-sm-4">
        <input class="form-control" placeholder="Your Body" id="body"  name="body"  value="{{ old('body', $post->body ?? null)}}" >
    </div>
    @foreach($errors->get('body') as $error)    
    <div class="col-sm-4">
        <span style="color:red;" class="help-block">{{ $error }}</span>
    </div>
@endforeach
</div>
