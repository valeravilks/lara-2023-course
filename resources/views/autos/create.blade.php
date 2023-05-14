<h1>Create New Car</h1>

<form method="post" action="/autos/create">
    @csrf
    <input type="text" name="make" placeholder="Make" value={{ old('make') }}>
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

<a href="/autos">Back to cars</a>