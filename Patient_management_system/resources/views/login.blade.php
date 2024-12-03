<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body style="
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: url('images/hospital-hallway.jpg') no-repeat center center fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
">

    <!-- Login Form -->
    <div style="
        background: rgba(255, 255, 255, 0.9);
        padding: 40px 30px;
        border-radius: 15px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        width: 400px;
        text-align: center;
    ">
        <h2 style="margin-bottom: 20px; color: #381f1d;">Login</h2>
        <form action="{{ route('login') }}" method="POST" style="display: flex; flex-direction: column;">
            @csrf
            <input type="text" name="username" placeholder="Username" required style="
                margin-bottom: 15px;
                padding: 10px;
                border-radius: 8px;
                border: 1px solid #ccc;
                font-size: 16px;
            ">
            <input type="password" name="password" placeholder="Password" required style="
                margin-bottom: 20px;
                padding: 10px;
                border-radius: 8px;
                border: 1px solid #ccc;
                font-size: 16px;
            ">
            <button type="submit" style="
                background: #0044cc;
                color: white;
                padding: 12px;
                border: none;
                border-radius: 8px;
                font-size: 16px;
                cursor: pointer;
                transition: background 0.3s;
            " onmouseover="this.style.background='#002080';" onmouseout="this.style.background='#0044cc';">
                Login
            </button>
        </form>
        <p style="margin-top: 15px; font-size: 14px;">
            Don't have an account? 
            <a href="{{ route('system.register') }}" style="color: #0044cc; text-decoration: none;">Register</a>
        </p>
    </div>
</body>
</html>
