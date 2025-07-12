<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login Page</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background-color: #222;
            border-radius: 8px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
            font-size: 24px;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #444;
            border-radius: 4px;
            background-color: #333;
            color: #fff;
        }
        input[type="submit"] {
            background-color: #555;
            border: none;
            padding: 10px;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #777;
        }
        .forgot-password {
            margin-top: 15px;
            color: #1E90FF;
            text-decoration: none;
        }
        .forgot-password:hover {
            text-decoration: underline;
        }
        .home-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #1E90FF;
            text-decoration: none;
        }
        .home-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="#" class="home-link">Home</a>
        <h1>Skill Swap Platform</h1>
        <form>
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
        <a href="#" class="forgot-password">Forgot username/password</a>
    </div>
</body>
</html>
