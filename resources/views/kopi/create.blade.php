<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tambah Produk Kopi</title>
    <style>
        body{ font-family:Arial; background:#f5f5f5; padding:20px; }
        .box{ max-width:500px; margin:auto; background:white; padding:20px; border-radius:8px;}
        input{ width:100%; padding:8px; margin-top:6px; margin-bottom:12px; border:1px solid #ccc; border-radius:6px; }
        button{ background:#6b4f4f; color:white; padding:8px 12px; border-radius:6px; border:none; cursor:pointer; }
        a{ margin-left:10px; text-decoration:none; color:#333; }
    </style>
</head>
<body>
<div class="box">
    <h2>Tambah Produk Kopi</h2>

    <form action="{{ route('kopi.store') }}" method="POST">
        @csrf
        <label>Nama Kopi</label>
        <input type="text" name="nama" required>

        <label>Harga (Rp)</label>
        <input type="number" name="harga" required>

        <label>Stok</label>
        <input type="number" name="stok" required>

        <button type="submit">Simpan</button>
        <a href="{{ route('kopi.index') }}">Batal</a>
    </form>
</div>
</body>
</html>
