<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir </title>
    <link rel="stylesheet" href="style/home.css">
</head>
<body>
<h2>Formulir</h2>
<div class="content">
    <form action="proses_pendaftaran.php" method="POST">
        <div>
            <label for="nisn">NISN</label>
            <input type="text" id="nisn" name="nisn" required>
        </div>
        <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input type="text" id="name" name="nama" required>
        </div>
        <div class="form-group">
            <label for="date">Tanggal Lahir</label>
            <input type="date" id="date" name="tanggal_lahir" required>
        </div>
        <div class="form-group">
            <label for="number">No Hp</label>
            <input type="text" id="number" name="no_hp" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" required>
        </div>
        <div class="form-group">
            <label for="prodi">Prodi</label>
            <select id="prodi" name="prodi">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
            </select>
        </div>
        <div class="form-group">
            <label for="jenjang">Jenjang</label>
            <select id="jenjang" name="jenjang">
                <option value="D3">D3</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
            </select>
        </div>
        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>
