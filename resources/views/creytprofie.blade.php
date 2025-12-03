<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('profile.store') }}" method="POST">
    @csrf
    <input type="text" name="full_name" placeholder="Full Name" required>
    <textarea name="about" placeholder="About"></textarea>
    <button type="submit">ارسال </button>
</form>

</body>
</html>