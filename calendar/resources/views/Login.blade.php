<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/54a4ae632a.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <form action="">
            <div class="login">
                <img class="img" src="{{ asset('assets/imgs/login2.png') }}">
                <h1>Login</h1>    
            </div>
            <div class="input-box">
                <input type="text" placeholder="Username" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" required>
                <i class="fa-solid fa-unlock-keyhole"></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
            </div>
            <button type="submit" class="button">Login</button>
        </form>

    </div>
</body>
</html>