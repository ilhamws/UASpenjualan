<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabelController extends Controller
{
    // GET: Ambil semua data dari tabel
    public function getAll($table)
    {
        $model = $this->getModel($table);
        return response()->json($model::all());
    }

    // GET: Ambil data berdasarkan ID
    public function getById($table, $id)
    {
        $model = $this->getModel($table);
        $data = $model::find($id);
        return response()->json($data ?: ['message' => 'Data not found'], $data ? 200 : 404);
    }

    // POST: Tambahkan data baru
    public function create(Request $request, $table)
    {
        $model = $this->getModel($table);
        $data = $model::create($request->all());
        return response()->json($data, 201);
    }

    // PUT: Update data berdasarkan ID
    public function update(Request $request, $table, $id)
    {
        $model = $this->getModel($table);
        $data = $model::find($id);
        if (!$data) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        $data->update($request->all());
        return response()->json($data);
    }

    // DELETE: Hapus data berdasarkan ID
    public function delete($table, $id)
    {
        $model = $this->getModel($table);
        $data = $model::find($id);
        if (!$data) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        $data->delete();
        return response()->json(['message' => 'Data deleted successfully']);
    }

    // Helper: Mendapatkan model sesuai nama tabel
    private function getModel($table)
    {
        $models = [
            'admin' => \App\Models\Admin::class,
            'kategori' => \App\Models\kategorii::class,
            'ongkir' => \App\Models\Ongkir::class,
            'pelanggan' => \App\Models\Pelanggan::class,
            'pembayaran' => \App\Models\Pembayaran::class,
            'pembelian_produk' => \App\Models\PembelianProduk::class,
            'pembelian' => \App\Models\Pembelian::class,
            'produk' => \App\Models\Produk::class,
            'user' => \App\Models\User::class,
        ];
        return $models[$table] ?? abort(404, 'Table not found');
    }
}