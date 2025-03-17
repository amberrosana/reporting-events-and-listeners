<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to bottom, #6e7a8a, #3e4a61, #222831);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #f0f0f0;
        }

        h1 {
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
            margin-top: 20px;
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

        @media (max-width: 600px) {
            h1 {
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
            h1 {
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
    <h1>LOG IN</h1>

    <form action="{{ route('login') }}" method="POST">
        @method('POST')
        @csrf

        <div>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" required value="{{ old('email') }}" placeholder="Your email goes here.">
        </div>

        <div>
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" required value="{{ old('password') }}" placeholder="Your password goes here.">
        </div>

        <div>
            <button type="submit">Log In</button>
        </div>
    </form>

    <p>Don't have an account?</p>
    <a href="{{ route('showRegisterForm') }}">Register Here</a>
</body>
</html>