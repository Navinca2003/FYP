<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research Grant Management</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to bottom, #ffffff, #e8f4fc);
            color: #2c3e50;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #2c3e50;
            color: #f9ca24;
            padding: 20px;
            position: relative;
        }

        .header .title {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
            text-align: center;
        }

        .header .logo {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
        }

        .container {
            max-width: 600px;
            margin: 60px auto;
            text-align: center;
        }

        .container .description {
            font-size: 18px;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        .container .first-time {
            font-size: 16px;
            margin-bottom: 40px;
            color: #7f8c8d;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        button {
            padding: 15px 30px;
            font-size: 16px;
            font-weight: bold;
            color: #ffffff;
            background-color: #2c3e50;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #f9ca24;
            color: #2c3e50;
        }
    </style>
</head>
<body>
    <header class="header">
        <!-- Logo -->
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="60" height="60">
                <circle cx="50" cy="50" r="45" fill="#4CAF50" stroke="#fff" stroke-width="2"/>
                <rect x="30" y="40" width="40" height="25" fill="#fff"/>
                <path d="M30,40 L70,40 L70,65 L30,65 Z" stroke="#000" stroke-width="1" fill="none"/>
                <circle cx="35" cy="40" r="2" fill="#4CAF50"/>
                <circle cx="65" cy="40" r="2" fill="#4CAF50"/>
                <circle cx="35" cy="65" r="2" fill="#4CAF50"/>
                <circle cx="65" cy="65" r="2" fill="#4CAF50"/>
                <path d="M35 40 L50 50 L65 40" stroke="#4CAF50" stroke-width="2"/>
                <path d="M35 65 L50 50 L65 65" stroke="#4CAF50" stroke-width="2"/>
            </svg>
        </div>
        <!-- Title -->
        <h1 class="title">RESEARCH GRANT MANAGEMENT</h1>
    </header>

    <div class="container">
        <p class="description">
            Welcome to the Research Grant Management System.
        </p>
        <p class="first-time">
            Please log in or register if you are a first-time user.
        </p>
        
        <!-- Login Button (links to the login route in Laravel) -->
        <div class="buttons">
            <a href="{{ route('login') }}">
                <button>Log In</button>
            </a>
            <!-- Register Button (links to the registration route in Laravel) -->
            <a href="{{ route('register') }}">
                <button>Register</button>
            </a>
        </div>
    </div>
</body>
</html>
