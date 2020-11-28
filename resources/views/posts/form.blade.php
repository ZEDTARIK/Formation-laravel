<div class="form-group">
    <label for="title">Title Post</label>
    <input type="text" id="title" name="title"  value={{ old('title', $post->title ?? null) }} >
</div>

<div class="form-group">
    <label for="body">Body Post</label>
    <input type="text" id="body"  name="body"  value={{ old('body', $post->body ?? null)}} >
</div>

@if( $errors->any())
<ul>
    @foreach( $errors->all() as $error)
    <li> {{ $error }} </li>
    @endforeach
</ul>
@endif
