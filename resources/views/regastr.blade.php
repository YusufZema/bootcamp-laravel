<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>

    <style>
        /* خلفية شفافة للصورة */
        body {
            position: relative;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
            overflow: hidden;
            color:#0000;
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
            opacity: 0.25; /* درجة الشفافية - تقدر تزيد أو تنقص */
            z-index: -1;
        }

        /* تنسيق الحاوية */
        .container {
            text-align: center;
            color: white;
            margin-bottom: 20px;
        }

        h1 {
            margin-bottom: 15px;
            font-size: 28px;
            font-weight: bold;
             color: #000;
        }

        /* تنسيق الفورم */
        form {
            background: rgba(255, 255, 255, 0.15);
            padding: 50px ;
            border-radius: 15px;
            width: 330px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
            backdrop-filter: blur(12px); 
            border: 1px solid rgba(255,255,255,0.4);
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            color: #000;
            font-weight: bold;
            font-size: 14px;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid rgba(255,255,255,0.6);
            background: rgba(255,255,255,0.25);
            font-size: 14px;
        }

        input::placeholder,
        textarea::placeholder {
            color: #4d4848a5;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #007bff;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }

        button:hover {
            background: #005ec4;
        }

        .error {
            color: #ff7373;
            font-size: 13px;
            margin-bottom: 10px;
            text-align: left;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>New User </h1>

        @if ($errors->has('regastr_error'))
            <p style="color: #ff7373;">{{ $errors->first('regastr_error') }}</p>
        @endif

        <form action="{{ url('regastr') }}" method="POST">
            @csrf

            <label for="name">Full Name</label>
            <input id="name" type="text" name="name" placeholder="Enter your name" value="{{ old('name') }}">
            @error('name') <div class="error">{{ $message }}</div> @enderror

            <label for="email">Email Address</label>
            <input id="email" type="email" name="email" placeholder="example@mail.com" value="{{ old('email') }}">
            @error('email') <div class="error">{{ $message }}</div> @enderror

            <label for="password">Password</label>
            <input id="password" type="password" name="password" placeholder="Enter password">
            @error('password') <div class="error">{{ $message }}</div> @enderror

            <label for="phons">Phone Number</label>
            <input id="phons" type="text" name="phons" placeholder="Phone number" value="{{ old('phons') }}">
            @error('phons') <div class="error">{{ $message }}</div> @enderror

            <label for="address">Address</label>
            <textarea id="address" name="address" placeholder="Your address">{{ old('address') }}</textarea>
            @error('address') <div class="error">{{ $message }}</div> @enderror

            <button type="submit">Register</button>
        </form>
    </div>

</body>
</html>
