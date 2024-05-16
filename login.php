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
$sql = "SELECT * FROM register WHERE username=? AND password=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

// Kullanıcının varlığını kontrol etme
if ($result->num_rows > 0) {
    // Kullanıcı bulundu, verified kontrolü yapılacak
    $row = $result->fetch_assoc();
    if ($row['verified'] == 1) {
        // Başarılı giriş işlemleri
        $cookie_name = "user";
        $cookie_value = "$username";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 gün

        // index.php'ye yönlendir ve modal verilerini GET parametreleriyle gönder
        header("Location: index.php?=" . "&modal_id=loginSuccess" );
        exit;
    } else {
        // Hesap onaylanmamış
        header("Location: index.php?=" . "&modal_id=notVerified" );
        exit;
    }
} else {
    // Başarısız giriş işlemleri
    header("Location: index.php?=" . "&modal_id=noAccountFound" );
    exit;
}

// Veritabanı bağlantısını ve sorguyu kapatma
if ($stmt !== null) {
    $stmt->close();
}
$conn->close();
?>
