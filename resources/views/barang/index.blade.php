<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/barang/tambah">tambah barang</a>
    <br>
    <br>
    <br>
    @if (session()->has('success'))
        <h1>{{session('success')}}</h1>
        @else
        <h1>{{session('error')}}</h1>
    @endif
    <table style="width:100%" border="1">
  <tr>
    <th>no</th>
    <th>nama barang</th>
    <th>harga barang</th>
    <th>jenis barang</th>
    <th>action</th>
  </tr>
    @foreach ($barang_v as $key => $barang)
  <tr>
      <td>{{++$key}}</td>
      <td>{{$barang->nama_barang}}</td>
      <td>{{$barang->harga_barang}}</td>
      <td>{{$barang->nama_jenis_barang}}</td>
      <td>
        <form action="barang/{{$barang->id}}" method="post">
        @method("delete")
        @csrf
        <button type="submit">hapus</button> 
      </form>
      <a href="/barang/{{$barang->id}}/edit">edit</button></td>
    </tr>
    @endforeach
</table>
</body>
</html>