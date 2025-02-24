<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="data-container">
        <h1>Penjualan</h1>
        <p>List Data Penjualan</p>
        <hr>
        <form action="/penjualan/{{$penjualan->PenjualanID}}" method="POST">
            @csrf
            @method('put')
            <label for=PenjualanID">PENJUALAN ID :</label>
            <input type="number" name="PenjualanID" placeholder="Masukkan Penjualan ID..." disabled>
            <label for="TanggalPenjualan">TANGGAL PENJUALAN :</label>\
            <input type="date" name="TanggalPenjualan" placeholder="Masukkan Tanggal Penjualan..." required>
            <label for="TotalHarga">TOTAL HARGA :</label>
            <input type="text" name="TotalHarga" placeholder="Masukkan Total Harga..." required>
            <label for="PelangganID">PELANGGAN ID :</label>
            <input type="number" name="PelangganID" placeholder="Masukkan Pelanggan ID..." required>
            <input type="submit" value="UPDATE DATA" class="update">
        </form>
    </div>
</body>
</html>