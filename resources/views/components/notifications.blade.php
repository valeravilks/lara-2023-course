{{-- Делаю уведомления в отдельном файле и не передаю в него ничего. Данные в него попадают черерз session --}}
{{-- Добавляю его в layout, так как мы можем использовать этот компонент и для других действий, ошибки, чего-то еще --}}

@if (session('notification'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <div>
            {{ session('notification') }}
        </div>
    </div>
@endif
