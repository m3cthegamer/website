<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bceweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Veritabanına bağlantı hatası: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM register WHERE username=? AND password=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($row['verified'] == 1) {
        $cookie_name = "user";
        $cookie_value = "$username";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

        header("Location: index.php?=" . "&modal_id=loginSuccess");
        exit;
    } else {
        header("Location: index.php?=" . "&modal_id=notVerified");
        exit;
    }
} else {
    header("Location: index.php?=" . "&modal_id=noAccountFound");
    exit;
}

if ($stmt !== null) {
    $stmt->close();
}
$conn->close();
?>
