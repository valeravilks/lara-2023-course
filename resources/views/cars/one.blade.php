<h1>Car: {{ $car['brand'] }} {{ $car['model'] }}</h1>
<ul>
    <li>
        <strong>Make:</strong> {{ $car['brand'] }}
    </li>
    <li>
        <strong>Model:</strong> {{ $car['model'] }}
    </li>
    <li>
        <strong>Price:</strong> {{ $car['price'] }}
    </li>
</ul>

<form method="post" action="/cars/{{ $car['id'] }}">
    @csrf
    @method("DELETE")
    <input type="hidden" name="id" value="{{ $car['id'] }}">
    <button>Delete</button>
</form>
<a href="/cars/{{ $car['id'] }}/edit">Edit</a>
<a href="/cars">Back to cars</a>