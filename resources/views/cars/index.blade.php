<x-layout.main>
    <h1>All Cars</h1>
    <a href="{{ route('cars.index') }}">Cars</a>
    <a href="{{ route('cars.trash') }}">Trash</a>
    <br>
    <a href="{{ route('cars.create') }}">Create new car</a>
    <ul>
        @foreach ($cars as $car)
            <li>
                <a href="{{ route('cars.show', $car->id) }}">{{ $car['brand'] }} {{ $car['model'] }}</a>
                <a href="{{ route('cars.edit', $car->id) }}">Edit</a>
                @if ($car->trashed())
                    <form method="post" action="{{ route('cars.restore', $car->id) }}">
                        @csrf
                        @method('PUT')
                        <button>
                            Restore
                        </button>
                    </form>
                @else
                    <form method="post" action="/cars/{{ $car['id'] }}">
                        @csrf
                        @method("DELETE")
                        <input type="hidden" name="id" value="{{ $car['id'] }}">
                        <button>Delete</button>
                    </form>
                @endif
            </li>
        @endforeach
    </ul>

    <a href="{{ route('home') }}">Back to home</a>
</x-layout.main>
