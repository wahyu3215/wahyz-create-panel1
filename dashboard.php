<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Auto Create Panel</title>
    <style>
        body { background:#0d0d0d; color:#00ffea; font-family:Arial; text-align:center; }
        .box { margin:50px auto; width:400px; padding:20px; border:1px solid #00ffea; border-radius:10px; }
        select, input, button { margin:10px; padding:10px; width:90%; border-radius:5px; border:1px solid #00ffea; background:#1a1a1a; color:#00ffea; }
        button { background:#00ffea; color:#0d0d0d; font-weight:bold; cursor:pointer; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Buat Panel Baru</h2>
        <form action="create_panel.php" method="post">
            <input type="text" name="email" placeholder="Email user" required><br>
            <input type="text" name="username" placeholder="Username panel" required><br>
            <input type="password" name="password" placeholder="Password panel" required><br>
            <select name="paket">
                <option value="1024">1GB</option>
                <option value="2048">2GB</option>
                <option value="4096">4GB</option>
                <option value="8192">8GB</option>
                <option value="30720">30GB</option>
                <option value="999999">Unli</option>
            </select><br>
            <button type="submit">Create Panel</button>
        </form>
    </div>
</body>
</html>
