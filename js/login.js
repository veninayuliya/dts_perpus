window.onload = function () {
    document.getElementById("loginForm").onsubmit = function () {
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        if (email === "admin@mail.com" && password === "admin123") {
            alert("Login Berhasil");
			window.location='home.php';
        }
        else {
            alert("Email atau password salah");
        }
        return false;
    }
}