<?php
// Formdan gelen verileri alma
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordconfirm = $_POST['passwordconfirm'];

// Veritabanı bağlantısı
$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "bceweb";

// Şifreleri kontrol etme
if($password != $passwordconfirm) {
    echo "Şifreler eşleşmiyor.";
    exit();
}

// Veritabanına bağlanma
$conn = new mysqli($servername, $db_username, $db_password, $dbname);
if($conn->connect_error) {
    die("Veritabanına bağlantı hatası: " . $conn->connect_error);
}

// Veritabanına veri ekleme
$sql = "INSERT INTO register (username, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $username, $email, $password);

if ($stmt->execute()) {
    echo "Yeni kayıt başarıyla oluşturuldu.";
} else {
    echo "Hata: " . $stmt->error;
}

// Bağlantıyı kapatma
$stmt->close();
$conn->close();
?>
