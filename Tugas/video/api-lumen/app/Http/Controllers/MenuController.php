<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('menus')
        ->join('kategoris', 'kategoris.idkategori', '=', 'menus.idkategori')
        ->select('menus.*', 'kategoris.kategori')
        ->orderBy('kategori', 'ASC')
        ->get();

        return response()->json($data, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'idkategori' => 'required|numeric',
            'menu' => 'required',
            'gambar' => 'required|max:2048',
            'harga' => 'required|numeric',
        ]);

        $namagambar = $request->file('gambar')->getClientOriginalName();
        $request->file('gambar')->move('upload', $namagambar);

        $data = [
            'idkategori' => $request->input('idkategori'),
            'menu' => $request->input('menu'),
            'gambar' => url('upload/', $namagambar),
            'harga' => $request->input('harga'),
        ];

        $menu = Menu::create($data);

        if ($menu) {
            $result = [
                'status' => 201,
                'pesan' => 'Data menu berhasil ditambahkan',
                'data' => $data
            ];
        } else {
            $result = [
                'status' => 400,
                'pesan' => 'Data menu gagal ditambahkan',
                'data' => '',
            ];
        }

        return response()->json($result, $result['status']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
