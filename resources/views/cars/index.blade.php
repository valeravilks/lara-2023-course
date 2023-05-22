<x-layout.main>
    <h1>All Cars</h1>
    <a href="{{ route('cars.create') }}">Create new car</a>
    <ul>
        @foreach ($cars as $car)
            <li>
                <a href="{{ route('cars.show', $car->id) }}">{{ $car['brand'] }} {{ $car['model'] }}</a>
                <a href="{{ route('cars.edit', $car->id) }}">Edit</a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('home') }}">Back to home</a>
</x-layout.main>
