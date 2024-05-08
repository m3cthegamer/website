<?php
// Veritabanı bağlantısı
$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "bceweb";

// Formdan gelen e-posta adresini al
$email = $_POST['email'];

// Veritabanına bağlanma
$conn = new mysqli($servername, $db_username, $db_password, $dbname);
if($conn->connect_error) {
    die("Veritabanına bağlantı hatası: " . $conn->connect_error);
}

// Kullanıcıyı veritabanında bul
$sql = "SELECT * FROM register WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    // Kullanıcı bulundu, şifre sıfırlama bağlantısı oluştur ve e-posta ile gönder
    $reset_token = md5(uniqid(rand(), true)); // Rastgele bir sıfırlama anahtarı oluşturuyoruz.
    $sql = "UPDATE register SET reset_token = ? WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $reset_token, $email);
    if ($stmt->execute()) {
        // Şifre sıfırlama bağlantısını oluştur
        $reset_link = "http://localhost/test/index.php?email=" . urlencode($email) . "&token=" . urlencode($reset_token);
       
        
        // E-posta gönderme işlemi
        $to = $email;
        $subject = "Şifre Sıfırlama";
        $message = "Şifrenizi sıfırlamak için lütfen aşağıdaki bağlantıya tıklayın:\n$reset_link";
        $headers = "From: bceobjecttracking@gmail.com";
        
        $check = mail($to, $subject, $message, $headers);

        if($check) {
            echo "Şifre sıfırlama bağlantısı e-posta adresinize gönderildi. Lütfen e-postanızı kontrol edin.";
        } else {
            echo "E-posta gönderilemedi. Lütfen daha sonra tekrar deneyin.";
        }
    } else {
        echo "Şifre sıfırlama bağlantısı oluşturulurken bir hata oluştu. Lütfen daha sonra tekrar deneyin.";
    }
} else {
    echo "Bu e-posta adresi ile kayıtlı bir kullanıcı bulunamadı.";
}

// Bağlantıyı kapatma
$stmt->close();
$conn->close();
?>
