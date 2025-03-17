<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE PROFILE</title>
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

        div {
            margin-bottom: 15px;
            text-align: left;
            width: 100%;
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
            max-width: 400px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
            text-align: center;
        }

        label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: #024873;
            font-weight: bold;
        }

        input {
            width: calc(100% - 20px);
            padding: 10px;
            border: 2px solid #4db8ff;
            border-radius: 8px;
            background-color: #e3f7ff;
            color: #024873;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input:focus {
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

            input {
                font-size: 14px;
            }

            button {
                font-size: 14px;
                padding: 10px;
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

            input {
                font-size: 12px;
                padding: 8px;
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
        Create a Profile
    </header>

    <form action="{{ route('profile.store') }}" method="POST">
        @method('POST')
        @csrf
        <div>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" required value="{{ old('address') }}" placeholder="Your address goes here.">
        </div>
        <div>
            <label for="number">Number</label>
            <input type="tel" name="number" id="number" value="{{ old('number') }}" placeholder="Your contact number goes here.">
        </div>
        <div>
            <label for="bio">Bio</label>
            <input type="text" name="bio" id="bio" required placeholder="Your bio goes here.">
        </div>
        <div>
            <button type="submit">Create Profile</button>
        </div>
    </form>
</body>
</html>
