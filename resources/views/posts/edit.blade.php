<h1>Edit post: {{ $post['title'] }} </h1>
<form method="post" action="/posts/edit/update/{{ $post['id'] }}">
    @csrf
    @method("PUT")
    <input type="text" name="title" placeholder="Title" value="{{ $errors->any() ? old('title') :  $post['title'] }}">
    <input type="text" name="content" placeholder="Content" value="{{ $errors->any() ? old('content') :  $post['Content'] }}">
    <button>Update</button>
</form>

@if($errors->any())
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>   
    @endforeach
</ul>
@endif

<a href="/posts/{{$post['id']}}">Back to Post</a>