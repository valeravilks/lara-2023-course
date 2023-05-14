<x-layout.main>
    <h1>Create New Post</h1>
    <form method="post" action="/posts">
        @csrf
        <input type="text" name="title" placeholder="Title" value="{{ old('title') }}">
        <input type="text" name="content" placeholder="Content" value="{{ old('content') }}">
        <button>Send</button>
        
        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>   
                @endforeach
            </ul>
        @endif
    </form>
</x-layout.main>