<h1>All Cars</h1>
<a href="/cars/create">Create new car</a>
<ul>
    @foreach ($cars as $car)
        <li>
            <a href="/cars/{{ $car['id'] }}">{{ $car['brand'] }} {{ $car['model'] }}</a>
        </li>
    @endforeach
</ul>

<a href="/">Back to home</a>