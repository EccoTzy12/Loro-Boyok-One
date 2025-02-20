<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir | Tambah | Penjualan</title>
</head>
<body>
    <div class="data-container">
        <h1>Penjualan</h1>
        <p>Tambah Data</p>
        <hr>
        <form action="/penjualan/kirim" method="POST">
            @csrf
            <label for="PenjualanID">Penjualan ID :</label>
            <input type="number" name="PenjualanID" placeholder="Masukkan Penjualan ID..." required>
            <label for="TanggalPenjualan">Tanggal Penjualan :</label>
            <input type="date" name="TanggalPenjualan" placeholder="Masukkan Tanggal Penjualan..." required>
            <label for="TotalHarga">Total Harga :</label>
            <input type="number" name="TotalHarga" placeholder="Masukkan Total Harga..." required>
            <label for="PelangganID">Pelanggan ID :</label>
            <input type="number" name="PelangganID" placeholder="Masukkan Pelanggan ID..." required>
            <input type="submit" value="KIRIM DATA" class="seed">
        </form>
    </div>
</body>
</html>