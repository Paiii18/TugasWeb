<!DOCTYPE html>
<html>
<head>
    <title>Register Form</title>
    <link rel="stylesheet" href="style/register.css">
</head>
<body>
    <h2>Register Form</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="username">Nama Lengkap</label>
        <input type="text" name="username" required><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Register">
        <p>Sudah memiliki akun? <a href="login.php">Login</a></p>
    </form>
</body>
</html>

<?php
// File: register.php
require_once 'koneksi.php';

// Buat koneksi
$koneksi = ambilkoneksi();

// Tangani formulir registrasi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Lakukan validasi data (misalnya: cek apakah email sudah digunakan sebelumnya, dll)

    // Simpan data pengguna ke database
    // Misalnya, menggunakan prepared statement untuk mencegah SQL injection
    $query = "INSERT INTO users (nama, email, password) VALUES (?, ?, ?)";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();
    $stmt->close();

    // Redirect pengguna ke halaman login
    header("Location: login.php");
    exit();
}
?>
