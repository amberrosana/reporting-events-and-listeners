<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to bottom, #6e7a8a, #3e4a61, #222831);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100vh;
            color: #f0f0f0;
        }

        header {
            background-color: #222831;
            color: white;
            padding: 15px 20px;
            text-align: center;
            font-size: 24px;
            border-radius: 8px;
            width: 100%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        form {
            background-color: #1e2a38;
            border-radius: 8px;
            padding: 30px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            margin: auto;
        }

        div {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: #d1d1d1;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 2px solid #444;
            border-radius: 5px;
            background-color: #2c3e50;
            color: #ecf0f1;
            font-size: 16px;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #3498db;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        p {
            text-align: center;
            margin-top: 20px;
            color: #d1d1d1;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            color: red;
        }

        li {
            margin: 5px 0;
        }

        @media (max-width: 600px) {
            header {
                font-size: 20px;
                padding: 10px 15px;
            }

            form {
                padding: 20px;
                width: 90%;
                max-width: 350px;
            }

            input[type="text"],
            input[type="email"],
            input[type="password"] {
                padding: 8px;
                font-size: 14px;
            }

            button {
                font-size: 14px;
                padding: 8px;
            }

            p {
                font-size: 14px;
            }
        }

        @media (max-width: 400px) {
            header {
                font-size: 18px;
                padding: 8px 10px;
            }

            form {
                padding: 15px;
                width: 95%;
                max-width: 300px;
            }

            input[type="text"],
            input[type="email"],
            input[type="password"] {
                padding: 6px;
                font-size: 12px;
            }

            button {
                font-size: 12px;
                padding: 6px;
            }

            p {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <header>
        Register
    </header>
    <form action="{{ route('register') }}" method="POST">
        @method('POST')
        @csrf
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required value="{{ old('name') }}" placeholder="Enter your name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required value="{{ old('email') }}" placeholder="Enter your email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required placeholder="Enter your password">
        </div>
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required placeholder="Confirm your password">
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
        <p>
            Already have an account?
            <a href="{{ route('showLoginForm') }}">Login here</a>
        </p>
    </form>
</body>
</html>