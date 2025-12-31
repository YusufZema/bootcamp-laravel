<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Work+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
</head>

<body>
    <div class="login-container">
        <form action="{{ url('login') }}" method="POST">
            @csrf

            <h2>تسجيل الدخول</h2>

            <div class="input-group">
                <label for="email">البريد الإلكتروني:</label>
                <div class="input-wrapper">
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        placeholder="example@mail.com" 
                        required
                        autocomplete="email"
                    >
                </div>
            </div>

            <div class="input-group">
                <label for="password">كلمة المرور:</label>
                <div class="input-wrapper">
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        placeholder="أدخل كلمة المرور" 
                        required
                        autocomplete="current-password"
                    >
                </div>
            </div>

            <button type="submit">تسجيل الدخول</button>

            @if ($errors->has('login_error'))
                <p class="error">{{ $errors->first('login_error') }}</p>
            @endif

            <a href="regastr"> ليس ليدي حساب   </a>
        </form>
    </div>
</body>
</html>
