<?php
// Cek apakah session sudah aktif sebelumnya
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Periksa apakah pengguna sudah login
if (isset($_SESSION['email'])) {
    // Ambil email pengguna dari session
    $email = $_SESSION['email'];

    // Pastikan data formulir telah dikirimkan sebelum mengaksesnya
    if (
        isset($_POST['nisn']) && isset($_POST['nama']) && isset($_POST['tanggal_lahir']) &&
        isset($_POST['no_hp']) && isset($_POST['alamat']) && isset($_POST['prodi']) && isset($_POST['jenjang'])
    ) {
        // Tangkap data dari formulir
        $nisn = $_POST['nisn'];
        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $no_hp = $_POST['no_hp'];
        $alamat = $_POST['alamat'];
        $prodi = $_POST['prodi'];
        $jenjang = $_POST['jenjang'];

        // Koneksi ke database
        $koneksi = mysqli_connect("localhost", "root", "", "pmb");

        // Periksa koneksi
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal: " . mysqli_connect_error();
            exit();
        }

        // Query untuk menyimpan data ke dalam database
        $query = "INSERT INTO users (email, nisn, nama, tanggal_lahir, no_hp, alamat, prodi, jenjang) VALUES ('$email', '$nisn', '$nama', '$tanggal_lahir', '$no_hp', '$alamat', '$prodi', '$jenjang')";

        // Jalankan query
        if (mysqli_query($koneksi, $query)) {
            echo "Pendaftaran berhasil!";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
        }

        // Tutup koneksi database
        mysqli_close($koneksi);
    } else {
        echo "Data formulir tidak lengkap!";
    }
} else {
    echo "Anda belum login!";
}
?>
