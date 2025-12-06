<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      @vite([
        'resources/css/tasks.css',
      ])
</head>
<body>

<h1>قائمة التاسكات</h1>

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf

    <input type="text" name="title" placeholder="عنوان التاسك" required>

    <textarea name="description" placeholder="وصف التاسك (اختياري)"></textarea>

    <button type="submit">أضف</button>
</form>

<ul>
@foreach($tasks as $task)
    <li>
        <form action="{{ route('tasks.update', $task) }}" method="POST" style="display:inline;">
            @csrf
            @method('PATCH')
            <button type="submit">{{ $task->completed ? '✔' : '❌' }}</button>
        </form>

        {{ $task->title }}

        <form action="{{ route('tasks.destroy', $task) }}" method="POST" >
            @csrf
            @method('DELETE')
            <button type="submit">حذف</button>
        </form>
    </li>
@endforeach
</ul>

</body>
</html> -->