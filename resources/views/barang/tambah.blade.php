<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tambah barang</title>
</head>
<body>
    <a href="/barang">kembali</a>
    <br>
    <br>
    <br>
    <form action="/barang/tambah" method="POST">
        @method("POST")
        @csrf
        <input type="text" name="nama_barang" placeholder="nama barang">
        <br>
        <br>
        <input type="text" name="harga_barang" placeholder="harga barang">
        <br>
        <br>
        <select name="id_jenis_barang" id="">
            @foreach ($jenis_barang_v as $jenis_barang)
            <option value="{{$jenis_barang->id}}">{{$jenis_barang->nama_jenis_barang}}</option>
            @endforeach
        </select>
        <br>
        <br>
        <button type="submit">tambah data</button>
    </form>
</body>
</html>