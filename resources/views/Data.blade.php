<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <ul>
        @foreach ($produk as $p)
            <li>{{ $p['nama'] }} - Rp {{ number_format($p['harga'], 0, ',', '.') }}</li>
        @endforeach
    </ul>
</body>
</html>
