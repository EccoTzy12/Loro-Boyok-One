<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir | Pelanggan</title>
</head>
<body>
    <div class="Judul">
        <h1>Kasir | Tabel Utama</h1>
        <p>List Data Pelanggan</p>
    </div>
    <hr>
    <div class="create-button">
        <a href="/Pelanggan/tambah">
            <input type="submit" value="TAMBAH DATA" class="create">
        </a>
    </div>
        <div class="serchbox">
            <form>
                <input type="text" name="keyword" required>
                <button class="search">CARI</button>
            </form>
        </div>
        <table align="center" border="1">
            <tr align="center">
                <th>Pelanggan ID</th>
                <th>NAMA PELANGGAN</th>
                <th>ALAMAT</th>
                <th>NOMER TELEPON</th>
                <th colspan="2">AKSI</th>
            </tr>
            
            @foreach ($pelanggan as $eco)
                <tr align="center">
                    <td>{{$eco->PelangganID}}</td>
                    <td>{{$eco->NamaPelanggan}}</td>
                    <td>{{$eco->Alamat}}</td>
                    <td>{{$eco->NomerTelepon}}</td>
                    <td>
                        <form action="/Pelanggan/{{$eco->PelangganID}}/edit">
                            @csrf
                            <input type="submit" value="EDIT" class="edit">
                        </form>
                    </td>
                    <td>
                        <form action="/Pelanggan/{{$eco->PelangganID}}" method="POST">
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
