<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit barang</title>
</head>
<body>
    <a href="/barang">kembali</a>
    <br>
    <br>
    <br>
    <form action="/barang/{{$detail_barang_v[0]->id}}" method="POST">
        @method("PUT")
        @csrf
        <input type="text" name="nama_barang" placeholder="nama barang" value="{{$detail_barang_v[0]->nama_barang}}">
        <br>
        <br>
        <input type="text" name="harga_barang" placeholder="harga barang" value="{{$detail_barang_v[0]->harga_barang}}">
        <br>
        <br>
        <select name="id_jenis_barang" id="">
            @foreach ($jenis_barang_v as $j)
                @if($j->id == $detail_barang_v[0]->id_jenis_barang)
                    <option value="{{$j->id}}" selected>{{$j->nama_jenis_barang}}</option>
                @else
                    <option value="{{$j->id}}">{{$j->nama_jenis_barang}}</option>
                @endif
            @endforeach
        </select>
        <br>
        <br>
        <button type="submit">edit data</button>
    </form>
</body>
</html>