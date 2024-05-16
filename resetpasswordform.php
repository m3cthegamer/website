<?php
// Eğer form gönderildiyse
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Veritabanı bağlantısı
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "bceweb";

    // Formdan gelen verileri al
    $token = $_POST['token'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Yeni şifrelerin eşleşip eşleşmediğini kontrol et
    if($new_password !== $confirm_password) {
        echo "Yeni şifreler eşleşmiyor.";
        exit();
    }

    // Veritabanına bağlanma
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);
    if($conn->connect_error) {
        die("Veritabanına bağlantı hatası: " . $conn->connect_error);
    }

    // Şifre sıfırlama bağlantısının geçerli olup olmadığını kontrol et
    $sql = "SELECT * FROM register WHERE reset_token = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Şifre sıfırlama bağlantısı geçerli ise, kullanıcının şifresini güncelle
        $row = $result->fetch_assoc();
        $user_id = $row['id'];
        
        $sql_update = "UPDATE register SET password = ? WHERE id = ?";
        $stmt_update = $conn->prepare($sql_update);
        // Şifreyi hashleyerek güvenli hale getirebilirsiniz. Örneğin: $new_password_hashed = password_hash($new_password, PASSWORD_DEFAULT);
        $stmt_update->bind_param("si", $new_password, $user_id);
        if ($stmt_update->execute()) {
            header("Location: index.php?=" . "&modal_id=passwordUpdated" );
        } else {
            header("Location: index.php?=" . "&modal_id=passwordUpdateError" );
        }
    } else {
        echo "Geçersiz şifre sıfırlama bağlantısı.";
    }

    // Bağlantıyı kapatma
    $stmt->close();
    $stmt_update->close();
    $conn->close();
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şifre Sıfırlama</title>
    <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/js/bootstrap.min.js">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- StyleSheet link CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<div class="modal fade" id="passwordReset" tabindex="-1" role="dialog" aria-labelledby="passwordUpdateErrorLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="passwordUpdateErrorLabel">Şifrenizi Belirleyin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
                    <div class="form-group">
                        <label for="new_password">Yeni Şifre:</label>
                        <input type="password" class="form-control" id="new_password" name="new_password">
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Yeni Şifre Tekrar:</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                    </div>
                    <button type="submit" class="btn btn-primary">Şifreyi Değiştir</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>





</body>
</html>

<style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('./assets/images/banner-background.png'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            height: 100vh; 
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        .content {
            text-align: center;
        }
    </style>

<script src="assets/js/jquery-3.6.0.min.js"> </script>
<script src="assets/js/bootstrap.min.js"> </script>
<script src="assets/js/video_link.js"></script>
<script src="./assets/js/video.js"></script>
<script src="assets/js/counter.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/animation_links.js"></script>
<script src="assets/js/animation.js"></script>
<script src="assets/js/test.js"></script>

<?php
function showModal($modal_id) {
    echo "<script>$(document).ready(function() {
        $('#$modal_id').modal('show'); 
    });</script>";
}
if (isset($_GET['modal_id']) && $_GET['modal_id'] == 'passwordReset') {
    showModal('passwordReset');
}

?>