<script>
    // Kullanıcı oturum açtığında tetiklenecek fonksiyon
    function hideLoginButton() {
        var loginButton = document.getElementById("loginButton");
        if (loginButton) {
            loginButton.style.display = "none"; // Butonu gizle
        }
    }

    // Örnek bir oturum açma işlemi simüle ediyoruz
    // Bu kısmı gerçek oturum açma işlemiyle değiştirmelisiniz
    function simulateLogin() {
        // Oturum açma işlemini gerçekleştirin
        // Örneğin, bir kullanıcı adı ve şifre kontrolü yapabilirsiniz

        // Oturum açma başarılı ise gizleme fonksiyonunu çağır
        hideLoginButton();
    }

    // Kullanıcı oturum açtığında tetiklenecek fonksiyon
    function simulateLogin() {
        var loginButton = document.getElementById("loginButton");
        if (loginButton) {
            loginButton.style.display = "none"; // Butonu gizle
        }
    }
</script>
