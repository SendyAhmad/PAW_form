<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa yang Dimasukkan</h2>

    <?php
    // Mendapatkan data dari form
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];

    // Menampilkan data yang dimasukkan
    echo "<p><strong>NIM:</strong> $nim</p>";
    echo "<p><strong>Nama:</strong> $nama</p>";
    echo "<p><strong>Jenis Kelamin:</strong> $jenis_kelamin</p>";
    echo "<p><strong>Alamat:</strong> $alamat</p>";
    echo "<p><strong>No HP:</strong> $no_hp</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    ?>
</body>
</html>
