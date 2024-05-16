<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Alıcı e-posta adresi
    $to = "coldwarkeko31@hotmail.com";
    
    // E-posta konusu
    $subject = "İletişim Formundan Yeni Mesaj";

    // Gönderenin bilgileri
    $from_name = $_POST['name'];
    $from_email = $_POST['emailid'];
    $phone_number = $_POST['phone'];
    $message = $_POST['msg'];

    // E-posta içeriği
    $email_body = "Ad: $from_name\n" .
                  "E-posta: $from_email\n" .
                  "Telefon Numarası: $phone_number\n\n" .
                  "Mesaj:\n$message";

    // Ekstra başlıklar
    $headers = "From: $from_name <$from_email>\r\n";
    $headers .= "Reply-To: $from_email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // E-postayı gönder
    $mail_sent = mail($to, $subject, $email_body, $headers);

    // E-posta başarıyla gönderildiyse
    if ($mail_sent) {
        echo "Mesajınız başarıyla gönderildi.";
    } else {
        echo "Mesajınız gönderilirken bir hata oluştu. Lütfen daha sonra tekrar deneyin.";
    }
}
?>
