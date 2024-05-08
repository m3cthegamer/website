<?php
// Alıcı e-posta adresi
$to = "coldwarkeko31@hotmail.com";

// E-posta konusu
$subject = "Rastgele Mesaj";

// Rastgele bir mesaj oluşturma
$message = "Bu bir rastgele mesajdır: " . rand();

// Gönderen e-posta adresi
$from = "gonderen@example.com";

// Ekstra başlıklar
$headers = "From: $from\r\n";
$headers .= "Reply-To: $from\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// E-postayı gönder
$mail_sent = mail($to, $subject, $message, $headers);

// E-posta başarıyla gönderildiyse
if ($mail_sent) {
    echo "E-posta başarıyla gönderildi.";
} else {
    echo "E-posta gönderilirken bir hata oluştu.";
}
?>
