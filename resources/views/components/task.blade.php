@props(['id', 'title', 'description', 'created_at', 'updated_at', 'status', 'priority', 'assigned_to'])

<div class="card mb-4">
    <div class="card-header">
        <h3>{{ $title }}</h3>
    </div>
    <div class="card-body">
        <p>{{ $description }}</p>
        <p><strong>Статус:</strong> {{ $status ? 'Выполнена' : 'Не выполнена' }}</p>
        <p><strong>Приоритет:</strong> {{ ucfirst($priority) }}</p>
        <p><strong>Исполнитель:</strong> {{ $assigned_to }}</p>
    </div>
    <div class="card-footer">
        <p>Создано: {{ $created_at }}</p>
        <p>Обновлено: {{ $updated_at }}</p>
        <a href="{{ route('tasks.edit', $id) }}" class="btn btn-warning">Редактировать</a>
        <form action="{{ route('tasks.destroy', $id) }}" method="POST" class="d-inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>
    </div>
</div>
