<?php
// Çerezin ismiyle çerez var mı kontrol ediyoruz
if(isset($_COOKIE["user"])) {
    // Çerez varsa, geçmiş bir tarih ile tekrar tanımlıyoruz (burada 1 saniye öncesini kullanıyoruz)
    setcookie("user", "", time() - 1, "/");
    // Ekrana bir mesaj yazdırabiliriz
    echo "Çerez silindi.";
    // Index.php sayfasına yönlendirme işlemi
    header("Location: index.php");
    exit(); // İşlem bittikten sonra kodun devam etmemesi için çıkış yapılır
} else {
    echo "Çerez bulunamadı.";
}
?>
