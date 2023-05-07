<h1>All Cars</h1>
<a href="/autos/create">Create new car</a>
<ul>
    @foreach ($autos as $auto)
        <li>
            <a href="/autos/{{ $auto['id'] }}">{{ $auto['make'] }} {{ $auto['model'] }}</a>
        </li>
    @endforeach
</ul>

<a href="/">Back to home</a>