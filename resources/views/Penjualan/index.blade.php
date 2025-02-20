<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir | Penjualan</title>
</head>
<body>
<center>
    <div class="judul">
        <h1>Kasir | Tabel | Utama</h1>
        <p>List Data Penjualan</p>
    </div>
    <hr>
    <div class="searchbox">
        <form>
            <input type="text" name="keyword" required>
            <button class="serch">CARI</button>
        </form>
    </div>
</center>
    <div class="create-button">
        <a href="/penjualan/tambah">
            <input type="submit" value="TAMBAH DATA" class="create">
        </a>
    </div>

    <table align="center" border="1">
        <tr align="center">
            <th>PENJUALAN ID</th>
            <th>TANGGAL PENJUALAN</th>
            <th>TOTAL HARGA</th>
            <th>PELANGGAN ID</th>
            <th colspan="2">AKSI</th>
        </tr>

        @foreach ($penjualan as $eco)
        <tr align="center">
            <td>{{$eco->PenjualanID}}</td>   
            <td>{{$eco->TanggalPenjualan}}</td>   
            <td>{{$eco->TotalHarga}}</td>   
            <td>{{$eco->PelangganID}}</td>
            <td>
                <form action="/penjualan/{{$eco->PenjualanID}}/edit">
                    @csrf
                    <input type="submit" value="EDIT" class="edit">
                </form>
            </td>
            <td>
                <form action="/penjualan/{{$eco->PenjualanID}}" method="POST">
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