<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "bceweb"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Veritabanına bağlantı hatası: " . $conn->connect_error);
}

$email = $_GET['email'];
$token = $_GET['token'];

$sql = "SELECT * FROM register WHERE email=? AND verification_token=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $token);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $update_sql = "UPDATE register SET verified = 1 WHERE email = ? AND verification_token = ?";
    $stmt_update = $conn->prepare($update_sql);
    $stmt_update->bind_param("ss", $email, $token);
    $stmt_update->execute();
    header("Location: index.php?=" . "&modal_id=Verified" );
    exit(); 

    

} else {
    echo "Onay bağlantısı geçersiz veya kullanılmış.";
}




$stmt->close();
$conn->close();
?>

