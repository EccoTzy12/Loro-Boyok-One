<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir | Edit | Penjualan</title>
</head>
<body>
        <div class="data-container">
            <h1>Penjualan</h1>
            <p>Edit Data Penjualan</p>
            <hr>
            <form action="/Penjualan{{$penjualan->PenjualanID}}" method="POST">
                @csrf
                @method('put')
                <label for="PenjualanID">Penjualan ID :</label>
                <input type="number" name="PenjualanID" placeholder="Masukkan Penjualan ID.." value="{{$penjualan->PelangganID}}" disabled>
                <label for="TanggalPenjualan">Tanggal Penjualan :</label>
                <input type="date" name="TanggalPenjualan" placeholder="Masukkan Tangga Penjualan" value="{{$penjualan->TanggalPenjualan}}" required>
                <label for="TotalHarga">Total Harga :</label>
                <input type="number" name="TotalHarga" placeholder="Masukkan Total Harga" value="{{$penjualan->TotalHarga}}" required>
                <label for="PelangganID">Pelanggan ID :</label>
                <input type="number" name="PelangganID" placeholder="Masukkan Pelanggan ID" value="{{$penjualan->PelangganID}}" required>
                <input type="submit" value="UPDATE DATA" class="update">
            </form>
        </div>
</body>
</html>