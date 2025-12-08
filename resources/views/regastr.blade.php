<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regastr</title>
    @vite([
        'resources/css/freomwrok.css',
        'resources/css/app.css',
        'resources/css/regastr.css'
        ])
</head>
   <body>
    <div class="container">
        <h1>تسجيل مستخدم جديد</h1>

         @if ($errors->has('regastr_error'))
    <p style="color:red;">{{ $errors->first('regastr_error') }}</p>
    @endif
        <form action="{{ url('regastr') }}" method="POST" class="register-form">
            @csrf

            <label for="name">الاسم</label>
            <input id="name" type="text" name="name" placeholder="الاسم" value="{{ old('name') }}">
            @error('name') <div class="error">{{ $message }}</div> @enderror

            <label for="email">البريد الإلكتروني</label>
            <input id="email" type="email" name="email" placeholder="example@domain.com" value="{{ old('email') }}">
            @error('email') <div class="error">{{ $message }}</div> @enderror

            <label for="password">كلمة المرور</label>
            <input id="password" type="password" name="password" placeholder="كلمة المرور">
            @error('password') <div class="error">{{ $message }}</div> @enderror

            <label for="phons">الهاتف</label>
            <input id="phons" type="text" name="phons" placeholder="رقم الهاتف" value="{{ old('phons') }}">
            @error('phons') <div class="error">{{ $message }}</div> @enderror

            <label for="address">العنوان</label>
            <textarea id="address" name="address" placeholder="العنوان">{{ old('address') }}</textarea>
            @error('address') <div class="error">{{ $message }}</div> @enderror

            <button type="submit">تسجيل</button>
        </form>
    </div>
</body>
</html>