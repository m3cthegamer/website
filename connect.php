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
// Onaylanmamış bir kullanıcı olarak ekleyelim, onaylanınca 0'dan 1'e dönüştürülecek.
$verification_token = md5(uniqid(rand(), true)); // Rastgele bir onaylama anahtarı oluşturuyoruz.
$sql = "INSERT INTO register (username, email, password, verified, verification_token) VALUES (?, ?, ?, 0, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $username, $email, $password, $verification_token);

if ($stmt->execute()) {
    // Yeni kullanıcı başarıyla eklendi, şimdi onay e-postası gönderelim.
    $verification_link = "http://localhost/verify.php?email=" . urlencode($email) . "&token=" . urlencode($verification_token);
    
    $mail_check = mail($email, 'Hesap Onayı', "Merhaba $username,\n\nHesabınızı aktive etmek için lütfen aşağıdaki bağlantıya tıklayın:\n$verification_link", 'From: bceobjecttracking@gmail.com');

    if ($mail_check) {
        echo "Yeni kayıt başarıyla oluşturuldu. Lütfen e-postanızı kontrol edin ve hesabınızı onaylayın.";
    } else {
        echo "Hesap oluşturuldu ancak onay e-postası gönderilemedi. Lütfen daha sonra tekrar deneyin.";
    }
} else {
    echo "Hata: " . $stmt->error;
}

// Bağlantıyı kapatma
$stmt->close();
$conn->close();
?>
