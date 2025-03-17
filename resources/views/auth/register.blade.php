<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #a8e6ff, #4db8ff, #0077b6);
            color: #024873;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        header {
            background: rgba(0, 119, 182, 0.9);
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            border-radius: 12px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            padding: 30px;
            width: 100%;
            max-width: 300px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
            text-align: center;
        }

        div {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: #024873;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 2px solid #4db8ff;
            border-radius: 8px;
            background-color: #e3f7ff;
            color: #024873;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #0077b6;
            box-shadow: 0 0 5px rgba(0, 119, 182, 0.5);
        }

        button {
            width: 100%;
            padding: 12px;
            background: #0077b6;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }

        button:hover {
            background: #005b8e;
            transform: scale(1.05);
        }

        p {
            text-align: center;
            margin-top: 20px;
            color:rgb(185, 228, 255);
        }

        a {
            color:rgb(177, 228, 255);
            text-decoration: none;
            font-weight: bold;
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
                    padding: 15px;
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
                    padding: 10px;
            }

            p {
                    font-size: 14px;
            }
        }

        @media (max-width: 400px) {
            header {
                    font-size: 18px;
                    padding: 10px;
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
                    padding: 8px;
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
    </form>
        <p>
            Already have an account?<br>
            <a href="{{ route('showLoginForm') }}">Login here</a>
        </p>
</body>
</html>