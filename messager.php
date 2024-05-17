<?php

$to = "coldwarkeko31@hotmail.com";


$subject = "Rastgele Mesaj";


$message = "Bu bir rastgele mesajdır: " . rand();


$from = "gonderen@example.com";


$headers = "From: $from\r\n";
$headers .= "Reply-To: $from\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

$mail_sent = mail($to, $subject, $message, $headers);


if ($mail_sent) {
    echo "E-posta başarıyla gönderildi.";
} else {
    echo "E-posta gönderilirken bir hata oluştu.";
}
?>
