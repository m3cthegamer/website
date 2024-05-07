<?php
session_start(); // Oturumu başlat

// Veritabanı bağlantısı
$servername = "localhost"; // Sunucu adı
$username = "root"; // Veritabanı kullanıcı adı
$password = ""; // Veritabanı şifre
$dbname = "bceweb"; // Veritabanı adı

// Veritabanına bağlanma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı kontrolü
if ($conn->connect_error) {
    die("Veritabanına bağlantı hatası: " . $conn->connect_error);
}

// Formdan gelen verileri alma
$username = $_POST['username'];
$password = $_POST['password'];

// Veritabanından kullanıcıyı sorgulama
$sql = "SELECT * FROM register WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

// Kullanıcının varlığını kontrol etme
if ($result->num_rows > 0) {
    $cookie_name = "user";
    $cookie_value = "m3cthegamer";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day 
    header("Location: index.php"); // anasayfa.php sayfasına yönlendir
    exit(); // İşlemi sonlandır
} else {
    echo "Kullanıcı adı veya şifre hatalı."; // Hata mesajı
    exit(); // İşlemi sonlandır
}



// Veritabanı bağlantısını kapatma
$conn->close();
?>


