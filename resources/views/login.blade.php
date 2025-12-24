<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول | Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Work+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <!-- fil css -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">

    <!-- google font-->

 
</head>

<body>
    <div class="login-container">
        <button class="lang-toggle" onclick="toggleLanguage()" aria-label="Toggle Language">
            <span lang="ar">EN</span>
            <span lang="en" style="display: none;">AR</span>
        </button>
        
        <form action="{{ url('login') }}" method="POST">
            @csrf

            <h2>
                <span lang="ar">تسجيل الدخول</span>
                <span lang="en" style="display: none;">Login</span>
            </h2>

            <div class="input-group">
                <label for="email">
                    <span lang="ar">البريد الإلكتروني:</span>
                    <span lang="en" style="display: none;">Email Address:</span>
                </label>
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
                <label for="password">
                    <span lang="ar">كلمة المرور:</span>
                    <span lang="en" style="display: none;">Password:</span>
                </label>
                <div class="input-wrapper">
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        placeholder="" 
                        required
                        autocomplete="current-password"
                    >
                </div>
            </div>

            <button type="submit">
                <span lang="ar">تسجيل الدخول</span>
                <span lang="en" style="display: none;">Sign In</span>
            </button>

            @if ($errors->has('login_error'))
                <p class="error">{{ $errors->first('login_error') }}</p>
            @endif

            <a href="regastr">
                <span lang="ar">إنشاء حساب جديد</span>
                <span lang="en" style="display: none;">Create New Account</span>
            </a>
        </form>
    </div>

    <script>
        // Language toggle functionality (optional - can be enhanced)
        document.addEventListener('DOMContentLoaded', function() {
            // Detect browser language or use stored preference
            const savedLang = localStorage.getItem('preferredLang') || 'ar';
            setLanguage(savedLang);
        });

        function setLanguage(lang) {
            document.documentElement.lang = lang;
            document.documentElement.dir = lang === 'ar' ? 'rtl' : 'ltr';
            
            // Show/hide language spans
            document.querySelectorAll('[lang="ar"]').forEach(el => {
                el.style.display = lang === 'ar' ? 'inline' : 'none';
            });
            document.querySelectorAll('[lang="en"]').forEach(el => {
                el.style.display = lang === 'en' ? 'inline' : 'none';
            });
            
            // Update placeholders
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            
            if (lang === 'ar') {
                emailInput.placeholder = 'example@mail.com';
                passwordInput.placeholder = 'أدخل كلمة المرور';
            } else {
                emailInput.placeholder = 'example@mail.com';
                passwordInput.placeholder = 'Enter password';
            }
            
            localStorage.setItem('preferredLang', lang);
        }

        function toggleLanguage() {
            const currentLang = document.documentElement.lang;
            const newLang = currentLang === 'ar' ? 'en' : 'ar';
            setLanguage(newLang);
        }
    </script>
</body>
</html>
