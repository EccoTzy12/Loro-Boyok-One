<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir | Detail | Penjualan</title>
</head>
<body>
    <center>
        <div class="Judul">
            <h1>Kasir | Detail | Penjualan</h1>
            <p>List Detail Penjualan</p>
        </div>
        <div class="searchbox">
            <input type="text" name="keyword" required>
            <button class="search">CARI</button>
        </div>
    </center>
    <hr>
    <div class="create-button">
        <a href="/detailpenjualan/tambah">
            <input type="submit" value="TAMBAH DATA" class="create">
        </a>
    </div>
    <table align="center" border="5">
        <tr align="center">
            <th>DETAIL ID</th>
            <th>PENJUALAN ID</th>
            <th>PRODUK ID</th>
            <th>JUMLAH PRODUK</th>
            <th>SUBTOTAL</th>
            <th colspan="2">AKSI</th>
        </tr>

        @foreach ($detailpenjualan as $exo)
        <tr align="center">
            <td>{{$exo->DetailID}}</td>
            <td>{{$exo->PenjualanID}}</td>
            <td>{{$exo->ProdukID}}</td>
            <td>{{$exo->JumlahProduk}}</td>
            <td>{{$exo->Subtotal}}</td>
        <td>
            <form action="/detailpenjualan/{{$exo->DetailID}}/edit">
                @csrf
                <input type="submit" value="EDIT" class="edit">
            </form>
        </td>
            <td>
                <form action="/detailpenjualan/{{$exo->DetailID}}" method="POST">
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