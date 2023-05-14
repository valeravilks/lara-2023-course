<h1>Create New Car</h1>

<form method="post" action="/cars/create">
    @csrf
    <input type="text" name="brand" placeholder="Brand" value={{ old('brand') }}>
    <input type="text" name="model" placeholder="Model" value={{ old('model') }}>
    <input type="text" name="price" placeholder="Price" value={{ old('price') }}>
    <button>Create</button>
</form>

@if( $errors->any() )
    <ul>
        @foreach ( $errors->all() as $error )
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<a href="/cars">Back to cars</a>