<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Buku::orderBy('judul', 'ASC')->get();
        return response()->json([
            'status' => true,
            'message' => 'List Data Buku',
            'data' => $data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataBuku = new Buku;

        $rules = [
            'judul' => 'required',
            'pengarang' => 'required',
            'tanggal_publikasi' => 'required|date',
        ];

        $validator = Validator($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Data Tidak Valid',
                'data' => $validator->errors(),
            ], 400);
        }

        $dataBuku->judul = $request->judul;
        $dataBuku->pengarang = $request->pengarang;
        $dataBuku->tanggal_publikasi = $request->tanggal_publikasi;

        $post = $dataBuku->save();

        return response()->json([
            'status' => true,
            'message' => 'Data Buku Berhasil Dimasukkan',
            'data' => $dataBuku
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Buku::find($id);
        if ($data) {
            return response()->json([
                'status' => true,
                'message' => 'Detail Data Buku',
                'data' => $data
            ], 200);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataBuku = Buku::find($id);
        if(empty($dataBuku)) {
            return response()->json([
                'status' => false,
                'message' => 'Buku Tidak Ditemukan',
            ], 404);
        }

        $rules = [
            'judul' => 'required',
            'pengarang' => 'required',
            'tanggal_publikasi' => 'required|date',
        ];

        $validator = Validator($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Data Tidak Valid',
                'data' => $validator->errors(),
            ], 400);
        }

        $dataBuku->judul = $request->judul;
        $dataBuku->pengarang = $request->pengarang;
        $dataBuku->tanggal_publikasi = $request->tanggal_publikasi;

        $post = $dataBuku->save();

        return response()->json([
            'status' => true,
            'message' => 'Data Buku Berhasil Diupdate',
            'data' => $dataBuku
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataBuku = Buku::find($id);

        if(empty($dataBuku)) {
            return response()->json([
                'status' => false,
                'message' => 'Buku Tidak Ditemukan',
            ], 404);
        }

        $delete = $dataBuku->delete();

        return response()->json([
            'status' => true,
            'message' => 'Data Buku Berhasil Dihapus',
            'data' => $dataBuku
        ], 200);
    }
}
