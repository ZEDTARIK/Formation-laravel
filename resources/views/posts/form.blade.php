<div class="form-group">
    <label for="title" class="col-sm-2 control-label">Title Post</label>
    <div class="col-sm-4">
        <input class="form-control"  placeholder="Your Title" type="text" id="title" name="title"  value={{ old('title', $post->title ?? null) }} >
    </div>
</div>

<div class="form-group">
    <label for="body" class="col-sm-2 control-label">Body Post</label>
    <div class="col-sm-4">
        <input class="form-control" placeholder="Your Body" type="text" id="body"  name="body"  value={{ old('body', $post->body ?? null)}} >
    </div>
</div>

@if( $errors->any())
<ul>
    @foreach( $errors->all() as $error)
    <li> {{ $error }} </li>
    @endforeach
</ul>
@endif
