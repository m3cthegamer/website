<?php
if(isset($_COOKIE["user"])) {
    setcookie("user", "", time() - 1, "/");
    echo "Çerez silindi.";
    header("Location: index.php");
    exit(); 
} else {
    echo "Çerez bulunamadı.";
}
?>
