


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

// E-posta adresinin veritabanında olup olmadığını kontrol etme
$email_check_query = "SELECT * FROM register WHERE email = ?";
$stmt_email_check = $conn->prepare($email_check_query);
$stmt_email_check->bind_param("s", $email);
$stmt_email_check->execute();
$result_email_check = $stmt_email_check->get_result();

if($result_email_check->num_rows > 0) {
    header("Location: index.php?=" . "&modal_id=existingUser" );
    exit();
}

// Kullanıcı adının veritabanında olup olmadığını kontrol etme
$username_check_query = "SELECT * FROM register WHERE username = ?";
$stmt_username_check = $conn->prepare($username_check_query);
$stmt_username_check->bind_param("s", $username);
$stmt_username_check->execute();
$result_username_check = $stmt_username_check->get_result();

if($result_username_check->num_rows > 0) {
    header("Location: index.php?=" . "&modal_id=existingUsername" );
    exit();
}

// Veritabanına veri ekleme
// Onaylanmamış bir kullanıcı olarak ekleyelim, onaylanınca 0'dan 1'e dönüştürülecek.
$verification_token = md5(uniqid(rand(), true)); // Rastgele bir onaylama anahtarı oluşturuyoruz.
$sql = "INSERT INTO register (username, email, password, verified, verification_token) VALUES (?, ?, ?, 0, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $username, $email, $password, $verification_token);

if ($stmt->execute()) {
    
    $verification_link = "http://localhost/test/verify.php?email=" . urlencode($email) . "&token=" . urlencode($verification_token);
    
    // E-posta başlığı ve içeriği
    $subject = 'Üyelik Aktivasyonu';
    $message = "<html><body>";
    $message .= "<p>Merhaba $username,</p>";
    $message .= "<p>Üyeliğinizi aktive etmek için lütfen <a href='$verification_link'>buraya tıklayın</a>.</p>";
    $message .= "</body></html>";

    $headers = 'From: bceobjecttracking@gmail.com' . "\r\n";
    // UTF-8 karakter kodlaması ekleyelim
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $mail_check = mail($email, $subject, $message, $headers);

    if ($mail_check) {
        header("Location: index.php?=" . "&modal_id=registerSuccess" );
    } else {
        header("Location: index.php?=" . "&modal_id=error" );
    }
} else {
    echo "Hata: " . $stmt->error;
}






$stmt->close();
$conn->close();
?>
