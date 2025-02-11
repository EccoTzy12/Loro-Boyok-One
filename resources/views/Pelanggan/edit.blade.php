<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir | Pelanggan | Edit</title>
</head>
<body>
    <div class="data-container">
        <h1>Pelanggan</h1>
        <p>Edit Data Pelanggan</p>
        <hr>
        <form action="/Pelanggan/{{$pelanggan->PelangganID}}" method="POST">
            @csrf
            @method('put')
            <label for="PelangganID">Pelanggan ID :</label>
            <input type="number" name="PelangganID" placeholder="Masukkan Pelanggan ID..." value="{{$pelanggan->PelangganID}}" disabled>
            <label for="NamaPelanggan">Nama Pelanggan :</label>
            <input type="text" name="NamaPelanggan" placeholder="Masukkan Nama Pelanggan..." value="{{$pelanggan->NamaPelanggan}}" required>
            <label for="Alamat"> Alamat :</label>
            <textarea name="Alamat" placeholder="Masukkan Alamat..." required>{{$pelanggan->Alamat}}</textarea>
            <label for="NomerTelepon"> Nomer Telepon :</label>
            <input type="text" name="NomerTelepon" placeholder="Masukkan Nomer Telepon..." value="{{$pelanggan->NomerTelepon}}" required>
            <input type="submit" value="UPDATE DATA" class="update">
        </form>
    </div>
</body>
</html>