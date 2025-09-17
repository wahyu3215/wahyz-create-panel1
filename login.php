<?php
session_start();

$valid_user = "admin"; // username
$valid_pass = "12345"; // password

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pass = $_POST["password"];

    if ($user === $valid_user && $pass === $valid_pass) {
        $_SESSION["login"] = true;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Username atau Password salah!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Panel</title>
    <style>
        body { background:#0d0d0d; color:#00ffea; font-family:Arial; text-align:center; }
        .login-box { margin:100px auto; width:300px; padding:20px; border:1px solid #00ffea; border-radius:10px; }
        input { margin:5px; padding:10px; width:90%; border-radius:5px; border:1px solid #00ffea; background:#1a1a1a; color:#00ffea; }
        button { padding:10px; width:100%; background:#00ffea; border:none; border-radius:5px; cursor:pointer; font-weight:bold; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form method="post">
            <input type="text" name="username" placeholder="Username"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <button type="submit">Login</button>
        </form>
        <p style="color:red;"><?php echo isset($error)?$error:""; ?></p>
    </div>
</body>
</html>
