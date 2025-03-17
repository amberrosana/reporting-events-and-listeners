<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to bottom, #6e7a8a, #3e4a61, #222831);
            color: white;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        a {
            color: black;
        }

        header {
            background-color: #222831;
            color: white;
            padding: 15px 20px;
            width: 100%;
            text-align: center;
            font-size: 24px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        div {
            background-color: #1e2a38;
            border-radius: 8px;
            padding: 30px;
            width: 90%;
            max-width: 500px;
            text-align: left;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }

        p {
            margin: 10px 0;
            font-size: 16px;
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

        form {
            margin-top: 20px;
            text-align: center;
        }

        form button {
            width: auto;
            margin: 10px 0;
        }

        @media (max-width: 600px) {
            header {
                font-size: 20px;
                padding: 10px 15px;
            }

            div {
                padding: 20px;
                width: 90%;
                max-width: 350px;
            }

            p {
                font-size: 14px;
            }

            button {
                font-size: 14px;
                padding: 8px;
            }
        }

        @media (max-width: 400px) {
            header {
                font-size: 18px;
                padding: 8px 10px;
            }

            div {
                padding: 15px;
                width: 95%;
                max-width: 300px;
            }

            p {
                font-size: 12px;
            }

            button {
                font-size: 12px;
                padding: 6px;
            }
        }
    </style>
</head>
<body>
    <header>
          <h1>Hello {{ Auth::user()->name }}! Welcome to your dashboard.</h1>
    </header>
    <div>
        <p>Name: {{ Auth::user()->name }}</p>
        <p>Email: {{ Auth::user()->email }}</p>
        <p>Account created at: {{ Auth::user()->created_at }}</p>

        <form action="{{ route('logout') }}" method="POST">
            @method('POST')
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>