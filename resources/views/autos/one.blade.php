<h1>Car: {{ $auto['make'] }} {{ $auto['model'] }}</h1>
<ul>
    <li>
        <strong>Make:</strong> {{ $auto['make'] }}
    </li>
    <li>
        <strong>Model:</strong> {{ $auto['model'] }}
    </li>
    <li>
        <strong>Price:</strong> {{ $auto['price'] }}
    </li>
</ul>

<form method="post" action="/autos/delete">
    @csrf
    @method("DELETE")
    <input type="hidden" name="id" value="{{ $auto['id'] }}">
    <button>Delete</button>
</form>
<a href="/autos/edit/{{ $auto['id'] }}">Edit</a>
<a href="/autos">Back to cars</a>