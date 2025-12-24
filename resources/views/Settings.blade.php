<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>

    <!-- ربط ملف CSS -->
    <link rel="stylesheet" href="{{ asset('css/logout.css') }}">
</head>

<body>

    <div class="logout-box">
        <h2>Are you sure you want to logout?</h2>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">
                Logout
            </button>
        </form>
    </div>

</body>
</html>
