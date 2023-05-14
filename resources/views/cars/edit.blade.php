<x-layout.main>
    <h1> Edit: {{ $car['brand'] }} {{ $car['model'] }}</h1>

    <form method="post" action="/cars/{{ $car['id'] }}">
        @csrf
        @method("PUT")
        <input type="text" name="brand" value={{ $errors->any() ? old('brand') : $car['brand'] }}>
        <input type="text" name="model" value={{ $errors->any() ? old('model') : $car['model'] }}>
        <input type="text" name="price" value={{ $errors->any() ? old('price') : $car['price'] }}>
        <button>Update</button>
    </form>

    @if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>   
        @endforeach
    </ul>
    @endif

    <a href="/cars/{{ $car['id'] }}">Back</a>
</x-layout.main>