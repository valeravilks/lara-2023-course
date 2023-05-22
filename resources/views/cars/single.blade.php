<x-layout.main>
    <h1>Car: {{ $car['brand'] }} {{ $car['model'] }}</h1>
    <ul>
        <li>
            <strong>Бренд:</strong> {{ $car['brand'] }}
        </li>
        <li>
            <strong>Модель:</strong> {{ $car['model'] }}
        </li>
        <li>
            <strong>Цена:</strong> {{ $car['price'] }}
        </li>
        <li>
            <strong>Тип коробки передач:</strong> {{ $gearboxType }}
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
</x-layout.main>
