<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء حساب جديد</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Work+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/regastr.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
</head>

<body>
    <div class="register-container">
        <form action="{{ url('regastr') }}" method="POST">
            @csrf

            <h2>إنشاء حساب جديد</h2>

            @if ($errors->has('regastr_error'))
                <p class="error">{{ $errors->first('regastr_error') }}</p>
            @endif

            <div class="input-group">
                <label for="name">الاسم الكامل:</label>
                <div class="input-wrapper">
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        placeholder="أدخل اسمك الكامل" 
                        value="{{ old('name') }}"
                        required
                        autocomplete="name"
                    >
                </div>
                @error('name') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="input-group">
                <label for="email">البريد الإلكتروني:</label>
                <div class="input-wrapper">
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        placeholder="example@mail.com" 
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                    >
                </div>
                @error('email') <div class="error">{{ $message }}</div> @enderror
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
                        autocomplete="new-password"
                    >
                </div>
                @error('password') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="input-group">
                <label for="phons">رقم الهاتف:</label>
                <div class="input-wrapper">
                    <input 
                        type="text" 
                        id="phons" 
                        name="phons" 
                        placeholder="05xxxxxxxx" 
                        value="{{ old('phons') }}"
                        required
                        autocomplete="tel"
                    >
                </div>
                @error('phons') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="input-group">
                <label for="address">العنوان:</label>
                <div class="input-wrapper">
                    <textarea 
                        id="address" 
                        name="address" 
                        placeholder="أدخل عنوانك"
                        required
                    >{{ old('address') }}</textarea>
                </div>
                @error('address') <div class="error">{{ $message }}</div> @enderror
            </div>

            <button type="submit">إنشاء الحساب</button>

            <a href="login">لديك حساب بالفعل؟ تسجيل الدخول</a>
        </form>
    </div>
</body>
</html>
