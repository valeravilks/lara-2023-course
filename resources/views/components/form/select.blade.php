@props([
    'options', 
    'selected' => '', // Добавил пустые значения для необязательных полей
    'label' => '', // Добавил пустые значения для необязательных полей
    'name',
])

<label>
    {{ $label }}
    <select name="{{ $name }}">
        {{-- Пуское дефольное значение с пустым value --}}
        {{-- Для того, чтобы не казалось, что выбрано первое значени из массива --}}
        <option value="">-------</option> 
        @foreach ($options as $key => $value)
            <option 
                value="{{ $key }}"
                {{-- Делаю проверку выбранного значения по ключу, но кажется можено и так и так --}}
                {{ $key ==  $selected ? 'selected' : ''}} 
                {{-- Можно по значению делать selected --}}
                {{-- {{ $value ==  $selected ? 'selected' : ''}}  --}}
            >
                {{ $value }}
            </option>
        @endforeach
    </select>
</label>