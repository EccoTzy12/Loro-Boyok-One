<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir | Produk</title>
</head>
<body>
    <center>
        <div class="Judul">
            <h1>Kasir | Tabel | Utama</h1>
            <p>List Data Produk</p>
        </div>
        <div class="searchbox">
            <form>
                <input type="text" name="keyword" required>
                <button class="search">CARI</button>
            </form>
        </div>
    </center>
    <hr>
        <div class="create-button">
            <a href="/produk/tambah">
                <input type="submit" value="TAMBAH DATA" class="create">
            </a>
        </div>
        <table align="center" border="5">
            <tr align="center">
                <th>PRODUK ID</th>
                <th>NAMA PRODUK</th>
                <th>HARGA</th>
                <th>STOK</th>
                <th colspan="2">AKSI</th>
            </tr>

            @foreach ($produk as $eco)
            <tr align="center">
                <td>{{$eco->ProdukID}}</td>
                <td>{{$eco->NamaProduk}}</td>
                <td>{{$eco->Harga}}</td>
                <td>{{$eco->Stok}}</td>
                <td>
                    <form action="/produk/{{$eco->ProdukID}}/edit">
                        @csrf
                        <input type="submit" value="EDIT" class="edit">
                    </form>
                </td>
                <td>
                    <form action="/produk/{{$eco->ProdukID}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="HAPUS" class="delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
</body>
</html>