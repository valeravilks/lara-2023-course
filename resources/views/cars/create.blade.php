<x-layout.main>
    <h1>Create New Car</h1>

    <form method="post" action="/cars">
        @csrf
        <input type="text" name="brand" placeholder="Brand" value={{ old('brand') }}>
        <input type="text" name="model" placeholder="Model" value={{ old('model') }}>
        <input type="text" name="price" placeholder="Price" value={{ old('price') }}>
        <x-form.select
            :options="$gearboxTypes"
            name="gearbox_types"
            label="Тип коробки передач"
        />
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
    </x-layout.main>