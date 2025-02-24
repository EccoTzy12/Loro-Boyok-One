<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir | Penjualan | Tambah</title>
</head>
<body>
    <div class="data-cobtainer">
        <h1>Penjualan</h1>
        <p>Tambah Data Penjualan</p>
        <hr>
        <form action="/penjualan/kirim" method="POST">
            @csrf
            <label for="PenjualanID">PENJUALAN ID :</label>
            <input type="number" name="PenjualanID" placeholder="Masukkan Penjualan ID..." required>
            <label for="TanggalPenjualan">TANGGAL PRNJUALAN :</label>
            <input type="date" name="TanggalPenjualan" placeholder="Masukkan Tanggal Penjualan..." required>
            <label for="TotalHarga">TOTAL HARGA :</label>
            <input type="text" name="TotalHarga" placeholder="Masukkan Total Harga" required>
            <label for="PelangganID">PELANGGAN ID</label>
            <input type="number" name="PelangganID" placeholder="Masukkan Pelanggan ID..." required>
            <input type="submit" value="KIRIM DATA" class="send">
        </form>
    </div>
</body>
</html>