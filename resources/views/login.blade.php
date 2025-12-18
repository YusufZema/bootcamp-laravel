<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <style>
        body {
            position: relative;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            overflow: hidden;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('logoH.jpg');
            background-size: cover;
            background-position: center;
            opacity: 0.25; 
            z-index: -1;
        }

        /* تصميم النموذج */
        form {
            background: rgba(255, 255, 255, 0.15);
            padding: 30px;
            border-radius: 12px;
            width: 330px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.4);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 26px;
            font-weight: bold;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid rgba(255,255,255,0.5);
            border-radius: 8px;
            margin-bottom: 15px;
            background: rgba(255,255,255,0.25);
            font-size: 14px;
        }

        input::placeholder {
            color: #796d6dff;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #007bff;
            border: none;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        button:hover {
            background: #005ec4;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            font-size: 15px;
            font-weight: bold;
            color: #005ec4;

        }

        p.error {
            color: #ff7a7a;
            text-align: center;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <form action="{{ url('login') }}" method="POST">
        @csrf

        <h2>Login</h2>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" placeholder="example@mail.com" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter password" required>

        <button type="submit">Sign In</button>

        @if ($errors->has('login_error'))
            <p class="error">{{ $errors->first('login_error') }}</p>
        @endif

        <a href="regastr">Create New Account</a>
    </form>

</body>
</html>
