<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KopiController extends Controller
{
    private $file;

    public function __construct()
    {
        $this->file = storage_path('app/coffee.json');
    }

    private function getData()
    {
        // kalau file belum ada → buat kosong
        if (!file_exists($this->file)) {
            file_put_contents($this->file, json_encode([], JSON_PRETTY_PRINT));
        }

        // decode dalam bentuk array
        $data = json_decode(file_get_contents($this->file), true);

        // jika gagal decode → kembalikan array kosong biar ga null
        return $data ?? [];
    }

    private function saveData($data)
    {
        file_put_contents($this->file, json_encode($data, JSON_PRETTY_PRINT));
    }

    // tampilkan daftar kopi
    public function index()
    {
        $kopi = $this->getData();
        return view('kopi.index', compact('kopi'));
    }

    // form tambah
    public function create()
    {
        return view('kopi.create');
    }

    // simpan data
    public function store(Request $request)
    {
        $data = $this->getData();

        $data[] = [
            'id' => time(),
            'nama' => $request->nama,
            'harga' => (int) $request->harga,
            'stok' => (int) $request->stok,
        ];

        $this->saveData($data);

        return redirect()->route('kopi.index')->with('success', 'Produk kopi berhasil ditambahkan!');
    }

    // hapus
    public function delete($id)
    {
        $data = $this->getData();

        $data = array_filter($data, fn($p) => $p['id'] != $id);

        $this->saveData(array_values($data));

        return redirect()->route('kopi.index')->with('success', 'Produk kopi berhasil dihapus!');
    }
}
