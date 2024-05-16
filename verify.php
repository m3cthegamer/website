<?php
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

// URL'den gelen verileri alma
$email = $_GET['email'];
$token = $_GET['token'];

// Veritabanında kullanıcıyı sorgulama
$sql = "SELECT * FROM register WHERE email=? AND verification_token=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $token);
$stmt->execute();
$result = $stmt->get_result();

// Kullanıcının varlığını kontrol etme
if ($result->num_rows > 0) {
    // Kullanıcıyı bulundu, verified alanını güncelle
    $update_sql = "UPDATE register SET verified = 1 WHERE email = ? AND verification_token = ?";
    $stmt_update = $conn->prepare($update_sql);
    $stmt_update->bind_param("ss", $email, $token);
    $stmt_update->execute();
    // Kullanıcıyı başarıyla onayladıktan sonra anasayfaya yönlendirme
    header("Location: index.php?=" . "&modal_id=Verified" );
    exit(); // İşlem sonlandırılıyor

    

} else {
    echo "Onay bağlantısı geçersiz veya kullanılmış.";
}



// Veritabanı bağlantısını kapatma
$stmt->close();
$conn->close();
?>

