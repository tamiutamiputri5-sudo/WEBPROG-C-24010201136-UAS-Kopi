<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Daftar Produk Kopi</title>
    <style>
        body { font-family: Arial, sans-serif; background:#f5f5f5; padding:20px; }
        .container{ max-width:900px; margin:auto; }
        table{ width:100%; border-collapse:collapse; background:white; }
        th,td{ padding:10px; border:1px solid #ddd; text-align:center; }
        th{ background:#6b4f4f; color:white; }
        .btn{ display:inline-block; padding:8px 12px; background:#6b4f4f; color:white; border-radius:5px; text-decoration:none; }
        .btn-danger{ background:#e74c3c; }
    </style>
</head>
<body>
<div class="container">
    <h2>☕ Daftar Produk Kopi</h2>

    <a href="{{ route('kopi.create') }}" class="btn">＋ Tambah Produk Kopi</a>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <table style="margin-top:15px;">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Kopi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @forelse($kopi as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item['nama'] }}</td>
                <td>Rp {{ number_format($item['harga'],0,',','.') }}</td>
                <td>{{ $item['stok'] }}</td>
                <td>
                    <!-- Edit tidak dibuat sekarang, hanya Hapus -->
                    <a href="{{ route('kopi.delete', $item['id']) }}" class="btn btn-danger" onclick="return confirm('Hapus produk?')">Hapus</a>
                </td>
            </tr>
        @empty
            <tr><td colspan="5">Belum ada produk kopi.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>
</body>
</html>
