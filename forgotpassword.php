<?php
$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "bceweb";

$email = $_POST['email'];

$conn = new mysqli($servername, $db_username, $db_password, $dbname);
if($conn->connect_error) {
    die("Veritabanına bağlantı hatası: " . $conn->connect_error);
}

$sql = "SELECT * FROM register WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $user_id = $row['id'];
    $reset_token = md5(uniqid(rand(), true));

    $sql = "UPDATE register SET reset_token = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $reset_token, $user_id);
    if ($stmt->execute()) {
        $reset_link = "http://localhost/test/resetpasswordform.php?token=" . urlencode($reset_token) . "&modal_id=passwordReset";

        $to = $email;
        $subject = "Şifre Sıfırlama";
        $message = "Şifrenizi sıfırlamak için lütfen aşağıdaki bağlantıya tıklayın:\n$reset_link";
        $headers = "From: bceobjecttracking@gmail.com";

        $check = mail($to, $subject, $message, $headers);

        if($check) {
            header("Location: index.php?=" . "&modal_id=passwordResetSent" );
        } else {
            header("Location: index.php?=" . "&modal_id=error" );
        }
    } else {
        echo "Şifre sıfırlama bağlantısı oluşturulurken bir hata oluştu. Lütfen daha sonra tekrar deneyin.";
    }
} else {
    header("Location: index.php?=" . "&modal_id=userNotFound" );
}

$stmt->close();
$conn->close();
?>
