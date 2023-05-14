<h1> Edit: {{ $auto['make'] }} {{ $auto['model'] }}</h1>

<form method="post" action="/autos/edit/update/{{ $auto['id'] }}">
    @csrf
    @method("PUT")
    <input type="text" name="make" value={{ $errors->any() ? old('make') : $auto['make'] }}>
    <input type="text" name="model" value={{ $errors->any() ? old('model') : $auto['model'] }}>
    <input type="text" name="price" value={{ $errors->any() ? old('price') : $auto['price'] }}>
    <button>Update</button>
</form>

@if($errors->any())
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>   
    @endforeach
</ul>
@endif

<a href="/autos/{{ $auto['id'] }}">Back</a>