<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir | Tambah | Produk</title>
</head>
<body>
        <div class="data-container">
            <h1>Produk</h1>
            <p>Halaman Tambah Produk</p>
            <hr>
            <form action="/produk/kirim" method="POST">
                @csrf
                <label for="ProdukID">Produk ID :</label>
                <input type="number" name="ProdukID" placeholder="Masukkan Produk ID..." required>
                <label for="NamaProduk">Nama Produk :</label>
                <input type="text" name="NamaProduk" placeholder="Masukkan Nama Produk..." required>
                <label for="Harga">Harga :</label>
                <input type="text" name="Harga" placeholder="Masukkan Harga..." required>
                <label for="Stok">Stok :</label>
                <input type="text" name="Stok" placeholder="Masukkan Stok..." required>
                <input type="submit" name="TAMBAH DATA" class="seed">
            </form>
        </div>
</body>
</html>