<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <link rel="stylesheet"  href="style/login.css">
</head>
<body>
    <h2>Login Form</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="username">Nama Lengkap:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
        <p>Belum memiliki akun? <a href="register.php">Register</a></p>
    </form>
</body>
</html>

<?php
require_once 'koneksi.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Fungsi untuk memeriksa kecocokan pengguna di database
    function authenticateUser($username, $password) {
        // Dapatkan koneksi ke database
        $conn = ambilkoneksi();

        // Siapkan pernyataan SQL untuk memeriksa keberadaan pengguna
        $sql = "SELECT * FROM users WHERE nama = ? AND password = ?";
        
        // Gunakan prepared statement untuk mencegah SQL injection
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        // Periksa apakah pengguna ditemukan
        if ($result->num_rows > 0) {
            // Pengguna ditemukan, set session email
            $row = $result->fetch_assoc();
            $_SESSION["email"] = $row['email'];
            return true;
        } else {
            // Pengguna tidak ditemukan
            return false;
        }

        // Tutup koneksi
        $stmt->close();
        $conn->close();
    }

    // Authentikasi pengguna
    if (authenticateUser($username, $password)) {
        $_SESSION["logged_in"] = true;
        echo "<script> alert ('Login Berhasil'); window.location = 'index.php';</script>";
        // Lakukan tindakan setelah login sukses, seperti pengalihan halaman
    } else {
        echo "Login gagal. Cek kembali username dan password.";
    }
}
?>

