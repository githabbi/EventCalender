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
        <form method="POST" action="">
            @csrf
            <div class="login">
                <h1><i>Login</i></h1>
            </div>
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox" name="remember">Remember me</label>
            </div>
            <button type="submit">Login</button>
           
        </form>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];



    $conn = DB::connection()->getPdo();

 

    $sql = "SELECT * FROM suser WHERE username='$username' AND password='$password'";
    $sql1 = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
    $result1 = $conn->query($sql1);
    if ($result->rowCount() > 0) {
        // Redirect to suser page if login successful
        return redirect()->route('suser.index');
    } elseif ($result1->rowCount() > 0) {
        // Redirect to admin page if login successful
        return redirect()->route('admin.index');
    } else {
        // Nom d'utilisateur ou mot de passe incorrect
        echo "<script>alert('Invalid username or password');</script>";
    }

 
}
?>


    </div>
</body>
</html>