<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Kategori;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class CartController extends Controller
{
    public function beli($idmenu){
        if (session()->missing('idpelanggan')) {
            return redirect('/login');
            alert('Anda belum Login');
        }

        $menu = Menu::where('idmenu', $idmenu)->first();

        $cart = session()->get('cart', []);
        if (isset($cart[$idmenu])) {
            $cart[$idmenu]['jumlah'] += 1;
        } else {
            $cart[$idmenu] = [
                'idmenu' => $menu->idmenu,
                'menu' => $menu->menu,
                'harga' => $menu->harga,
                'jumlah' => 1,
            ];
        }

        session()->put('cart', $cart);
        return redirect('/cart');
    }

    public function cart(){
        $kategoris = Kategori::all();
        return view('cart', ['kategoris' => $kategoris]);
    }

    public function hapus($idmenu){
        $cart = session()->get('cart');
        if (isset($cart[$idmenu])) {
            unset($cart[$idmenu]);
            session()->put('cart', $cart);
        }

        return redirect('/cart');
    }

    public function batal(){
        session()->forget('cart');
        return redirect('/');
    }

    public function tambah($idmenu){
        $cart = session()->get('cart');
        $cart[$idmenu]['jumlah'] += 1;
        session()->put('cart', $cart);

        return redirect('cart');
    }

    public function kurang($idmenu){
        $cart = session()->get('cart');
        if ($cart[$idmenu]['jumlah'] > 1) {
            $cart[$idmenu]['jumlah'] -= 1;
            session()->put('cart', $cart);
        }else {
            unset($cart[$idmenu]);
            session()->put('cart', $cart);
        }

        return redirect('cart');
    }

    public function checkout(){
        $idorder = date('YmdHms');
        $total = 0;

        foreach (session('cart') as $cart => $value) {
            $data = [
                'idorder' => $idorder,
                'idmenu' => $value['idmenu'],
                'jumlah' => $value['jumlah'],
                'hargajual' => $value['harga'],
            ];

            $total = $total + ($value['jumlah'] * $value['harga']);
            OrderDetail::create($data);
        }

        $tanggalorder = date('Y-m-d');
        $data = [
            'idorder' => $idorder,
            'idpelanggan' => session('idpelanggan')['idpelanggan'],
            'tglorder' => $tanggalorder,
            'total' => $total,
            'bayar' => 0,
            'kembali' => 0,
            'status' => 0,
        ];

        Order::create($data);
        return redirect('/logout');
    }
}
