<?php
require_once('config.php');

function generateRandomKey($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "bceweb";

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

if ($conn->connect_error) {
    die("Veritabanına bağlanırken hata oluştu: " . $conn->connect_error);
}

if(isset($_COOKIE['user'])) {
    $username = $_COOKIE['user'];

    $token = isset($_POST['token']) ? $_POST['token'] : '';

    $request = new \Iyzipay\Request\RetrieveCheckoutFormRequest();
    $request->setLocale(\Iyzipay\Model\Locale::TR);
    $request->setConversationId("123456789");
    $request->setToken($token);

    $checkoutForm = \Iyzipay\Model\CheckoutForm::retrieve($request, Config::options());

    if ($checkoutForm->getStatus() == 'success') {
        $startDate = date('Y-m-d');
        $endDate = date('Y-m-d', strtotime('+1 day'));

        $customerid = $username;

        $randomKey = generateRandomKey();

        $orderquery = "INSERT INTO siparis (miktar, customerid, startDate, endDate, randomKey) 
                  VALUES ('10', '$customerid', '$startDate', '$endDate', '$randomKey')";

                  
$emailQuery = "SELECT email FROM register WHERE username='$username'";
$emailResult = $conn->query($emailQuery);

if ($emailResult->num_rows > 0) {
    $row = $emailResult->fetch_assoc();
    $user_email = $row['email'];

    $subject = "Yeni Sipariş Bilgisi";
    $from = "From: bceobjecttracking@gmail.com";
    
    $message = "Yeni bir sipariş alındı:\n";
    $message .= "Fiyat: 10\n";
    $message .= "Müşteri ID: " . $customerid . "\n";
    $message .= "Başlangıç Tarihi: " . $startDate . "\n";
    $message .= "Bitiş Tarihi: " . $endDate . "\n";
    $message .= "Rastgele Anahtar: " . $randomKey;
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
    $headers .= $from;
    
    if (mail($user_email, $subject, $message, $headers)) {
        header("Location: /test/index.php?=" . "&modal_id=successPurchase");
        exit();
    } else {
        header("Location: /test/index.php?=" . "&modal_id=error" );
    }
} else {
    header("Location: /test/index.php?=" . "&modal_id=noAccountFound" );
}

        if ($conn->query($orderquery) === TRUE) {
        } else {
            echo "Üyelik bilgilerini eklerken hata oluştu: " . $conn->error;
        }
    } else {
        echo "Ödeme işlemi başarısız oldu. Hata: " . $checkoutForm->getErrorMessage();
    }
} else {
    echo "Oturum kapalı.";
}

$conn->close();
?>
