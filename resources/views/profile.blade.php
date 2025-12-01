<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>عرض</h1>
    <form action="{{ url('profile') }}" method="POST">
    @csrf

    <label>الاسم الكامل</label><br>
    <input type="text" name="full_name"><br><br>

    <label>نبذة</label><br>
    <textarea name="about"></textarea><br><br>

    <button type="submit">إنشاء</button>
</form>

</body>
</html>