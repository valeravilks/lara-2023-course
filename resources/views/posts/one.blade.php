<x-layout.main>
    <h1>{{ $post['title'] }}</h1>
    <p>{{ $post['Content'] }}</p>
    <form method="post" action="/posts/{{$post['id']}}">
        @csrf
        @method("DELETE")
        <input type="hidden" name="id" value="{{$post['id']}}">
        <button>Delete</button>
    </form>
    <a href="/posts/{{$post['id']}}/edit">Edit post</a>
    <a href="/posts">Back</a>
</x-layout.main>