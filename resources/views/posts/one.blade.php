<h1>{{ $post['title'] }}</h1>
<p>{{ $post['Content'] }}</p>
<form method="post" action="/posts/delete">
    @csrf
    @method("DELETE")
    <input type="hidden" name="id" value="{{$post['id']}}">
    <button>Delete</button>
</form>
<a href="/posts/edit/{{$post['id']}}">Edit post</a>
<a href="/posts">Back</a>