<?php
// Çerezin ismiyle çerez var mı kontrol ediyoruz
if(isset($_COOKIE["user"])) {
    // Çerez varsa, geçmiş bir tarih ile tekrar tanımlıyoruz (burada 1 saniye öncesini kullanıyoruz)
    setcookie("user", "", time() - 1, "/");
    // Ekrana bir mesaj yazdırabiliriz
    echo "Çerez silindi.";
} else {
    echo "Çerez bulunamadı.";
}
?>
