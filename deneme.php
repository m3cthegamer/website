<?php

// Veritabanı bağlantısı
$servername = "localhost"; // Sunucu adı
$user_name = "root"; // Veritabanı kullanıcı adı
$password = ""; // Veritabanı şifre
$dbname = "bceweb"; // Veritabanı adı

// Kullanıcının oturum açtığından emin olun
if(isset($_COOKIE['user'])) {
    // Kullanıcı adınızı veritabanından alın
    $username = $_COOKIE['user'];

    // Veritabanı bağlantısı oluşturun
    $db_connection = new mysqli($servername, $user_name, $password, $dbname);
    
    // Bağlantıyı kontrol edin
    if ($db_connection->connect_error) {
        die("Veritabanına bağlanılamadı: " . $db_connection->connect_error);
    }
    
    // Kullanıcının e-posta adresini sorgulayın
    $query = "SELECT email FROM register WHERE username='$username'";
    $result = $db_connection->query($query);

    // Eğer sorgu sonucunda bir satır varsa
    if ($result->num_rows > 0) {
        // Satırı alın
        $row = $result->fetch_assoc();
        $user_email = $row['email'];

        // E-posta gönderme işlemi
        $subject = "Konu";
        $message = "Mesaj bilgisi";
        $from = "From: bceobjecttracking@gmail.com";

        
        // E-posta gönderme işlemi
        if (mail($user_email, $subject, $message, $from)) {
            echo "E-posta başarıyla gönderildi.";
        } else {
            echo "E-posta gönderilirken bir hata oluştu.";
        }
    } else {
        echo "Kullanıcının e-posta adresi bulunamadı.";
    }

    // Veritabanı bağlantısını kapatın
    $db_connection->close();
} else {
    echo "Oturum açılmamış.";
}

?>