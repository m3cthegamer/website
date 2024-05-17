<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $to = "coldwarkeko31@hotmail.com";
    

    $subject = "İletişim Formundan Yeni Mesaj";


    $from_name = $_POST['name'];
    $from_email = $_POST['emailid'];
    $phone_number = $_POST['phone'];
    $message = $_POST['msg'];


    $email_body = "Ad: $from_name\n" .
                  "E-posta: $from_email\n" .
                  "Telefon Numarası: $phone_number\n\n" .
                  "Mesaj:\n$message";


    $headers = "From: $from_name <$from_email>\r\n";
    $headers .= "Reply-To: $from_email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";


    $mail_sent = mail($to, $subject, $email_body, $headers);


    if ($mail_sent) {
        header("Location: contact.php?=" . "&modal_id=messageSent" );
    } else {
        header("Location: contact.php?=" . "&modal_id=messageNotSent" );
    }
}
?>
