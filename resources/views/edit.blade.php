<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>تعديل المهمة</h2>

<form action="{{ route('tasks.update', $task) }}" method="POST">
    @csrf
    @method('PATCH')

    <label>عنوان المهمة</label>
    <input type="text" name="title" value="{{ old('title', $task->title) }}" required>

    <label>الوصف</label>
    <textarea name="description" required>{{ old('description', $task->description) }}</textarea>

    <button type="submit">حفظ التعديلات</button>
</form>

</body>
</html>