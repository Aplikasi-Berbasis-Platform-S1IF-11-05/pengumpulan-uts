<?php
if(isset($_POST['kirim'])){
    $nama = $_POST['nama'];
    $pesan = $_POST['pesan'];
    echo "<p>Terima kasih $nama, pesan kamu sudah diterima!</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kontak</title>
</head>
<body>

<h1>Contact</h1>

<form method="POST">
    <input type="text" name="nama" placeholder="Nama" required><br><br>
    <textarea name="pesan" placeholder="Pesan"></textarea><br><br>
    <button type="submit" name="kirim">Kirim</button>
</form>

<a href="index.blade.php">Kembali</a>

</body>
</html>