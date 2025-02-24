<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Detail Penjualan</title>
</head>
<body>
    <center>
    <div class="data-container">
        <h1>Detail Penjualan</h1>
        <p>Edit Data</p>
    </center>
    <hr>
        <form action="/detailpenjualan/{{$detailpenjualan->DetailID}}" method="POST">
            @csrf
            @method('put')
            <label for="DetailID">Detail ID :</label>
            <input type="number" name="DetailID" placeholder="Masukkan Detail ID..."  required>
            <label for="PenjualanID">Penjualan ID :</label>
            <input type="number" name="PenjualanID" placeholder="Masukkan Penjualan ID..." disabled>
            <label for="ProdukID">Produk ID :</label>
            <input type="number" name="ProdukID" placeholder="Masukkan Produk ID..."  disabled>
            <label for="JumlahProduk">Jumlah Produk :</label>
            <input type="number" name="JumlahProduk" placeholder="Masukkan Jumlah Produk..."  required>
            <label for="Subtotal">Subtotal :</label>
            <input type="number" name="Subtotal" placeholder="Masukkan Subtotal..."  required>
            <input type="submit" value="UDATE DATA" class="update">
        </form>
    </div>
</body>
</html>