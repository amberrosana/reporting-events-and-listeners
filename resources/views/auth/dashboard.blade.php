<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #a8e6ff, #4db8ff, #0077b6);
            color: #024873;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

        a {
            color: #0077b6;
            text-decoration: none;
        }

        header {
            background: rgba(0, 119, 182, 0.9);
            color: white;
            padding: 20px;
            width: 100%;
            text-align: center;
            font-size: 24px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            border-radius: 0 0 20px 20px;
        }

        .container {
            width: 90%;
            max-width: 500px;
            margin-top: 30px;
            text-align: center;
        }

        .profile-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            text-align: left;
        }

        .profile-card p {
            margin: 10px 0;
            font-size: 16px;
        }

        .button-group {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }

        button {
            padding: 12px 20px;
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

        @media (max-width: 600px) {
            header {
                font-size: 20px;
                padding: 15px;
            }

            .profile-card {
                padding: 20px;
                width: 90%;
                max-width: 350px;
            }

            .button-group {
                flex-direction: column;
                gap: 10px;
            }

            button {
                font-size: 14px;
                padding: 10px;
                width: 100%;
            }
        }

        @media (max-width: 400px) {
            header {
                font-size: 18px;
                padding: 10px;
            }

            .profile-card {
                padding: 15px;
                width: 95%;
                max-width: 300px;
            }

            button {
                font-size: 12px;
                padding: 8px;
            }
        }

    </style>
</head>
<body>
    <header>
        <h1>
            @if (Auth::user()->profile)
                Hello {{ Auth::user()->name }}! Welcome to your dashboard.
            @else
                Welcome to your dashboard, {{ Auth::user()->name }}! You don’t have a profile yet.
            @endif
        </h1>
    </header>

    <div class="container">
        @if (Auth::user()->profile)
            <div class="profile-card">
                <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                <p><strong>Address:</strong> {{ Auth::user()->profile->address }}</p>
                <p><strong>Phone Number:</strong> {{ Auth::user()->profile->number }}</p>
                <p><strong>Bio:</strong> {{ Auth::user()->profile->bio }}</p>
            </div>
        @endif

        <div class="button-group">
            @if (Auth::user()->profile)
                <form action="{{ route('profile.edit', ['profile' => $profile]) }}" method="GET">
                    <button type="submit">Edit Profile</button>
                </form>
            @else
                <form action="{{ route('profile.create') }}" method="GET">
                    <button type="submit">Create Profile</button>
                </form>
            @endif

            <form action="{{ route('logout') }}" method="POST">
                @method('POST')
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>
</body>
</html>
