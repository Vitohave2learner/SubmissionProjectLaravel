<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Produk</title>
</head>
<body>
    <h1>Detail Produk ID: {{ $id }}</h1>

    <p>Ini adalah halaman untuk menampilkan detail dari produk dengan ID {{ $id }}.</p>

    <a href="{{ route('produk.index') }}">
        Kembali ke Daftar Produk
    </a>
</body>
</html>
