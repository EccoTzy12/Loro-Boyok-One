<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir | Pelanggan | Tambah</title>
</head>
<body>
    <div class="data-container">
        <h1>Pelanggan</h1>
        <p>Tambah Data</p>
        <hr>
        <form action="/Pelanggan/kirim" method="POST">
            @csrf
            <label for="PelaangganID">Pelanggan ID :</label>
            <input type="number" name="PelangganID" placeholder="Masukkan Pelanggan ID..." required>
            <label for="NamaPelanggan">Nama Pelanggan :</label>
            <input type="text" name="NamaPelanggan" placeholder="Masukkan Nama Pelanggan..." required>
            <label for="Alamat">Alamat :</label>
            <textarea name="Alamat" placeholder="Masukkan Alamat..." required></textarea>
            <label for="Nomertelepon">Nomer Telepon :</label>
            <input type="text" name="NomerTelepon" placeholder="Masukkan Nomer Telepon..." required>
            <input type="submit" value="KIRIM DATA" class="seed">
        </form>
    </div>
</body>
</html>