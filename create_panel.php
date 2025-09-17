<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit();
}

// Data dari form
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$ram = $_POST["paket"];

// API Key PLTC/PLTA kamu
$api_url = "https://domain-pterodactyl.com/api/create"; // contoh endpoint
$api_key = "API_KEY_PLTA";

// Kirim request ke API
$data = [
    "email" => $email,
    "username" => $username,
    "password" => $password,
    "ram" => $ram
];

$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer ".$api_key,
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

echo "<pre>Response dari server:\n$response</pre>";
?>
