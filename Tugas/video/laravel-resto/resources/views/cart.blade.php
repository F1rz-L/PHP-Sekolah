@extends('front')

@section('content')
    @if (session()->has('cart'))
        <div>
            <div>
                <a class="btn btn-danger" href="{{ url('/batal') }}">Bersihkan Keranjang</a>
            </div>
            @php
                $nomor = 0;
                $total = 0;
            @endphp
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Menu</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (session('cart') as $idmenu=>$menu)
                        <tr>
                            <td>{{ $nomor += 1 }}</td>
                            <td>{{ $menu['menu'] }}</td>
                            <td>{{ $menu['harga'] }}</td>
                            <td>
                                <span><a href="{{ url('/kurang/'.$menu['idmenu']) }}"> [-] </a></span>
                                {{ $menu['jumlah'] }}
                                <span><a href="{{ url('/tambah/'.$menu['idmenu']) }}"> [+] </a></span>
                            </td>
                            <td>{{ $menu['harga'] * $menu['jumlah'] }}</td>
                            <td class="table-danger"><a class="btn btn-danger" href="{{ url('/hapus/'.$menu['idmenu']) }}">Hapus</a></td>
                        </tr>

                    @php
                        $total = $total + ($menu['harga'] * $menu['jumlah'])
                    @endphp
                    @endforeach
                    <tr class="table-secondary">
                        <td colspan="4">Total Pembayaran</td>
                        <td colspan="2">{{ $total }}</td>
                    </tr>
                </tbody>
            </table>
            <div>
                <a class="btn btn-success" href="{{ url('/checkout') }}">Checkout</a>
            </div>
        </div>

    @else
        <script>
            window.location.href = '/';
        </script>
    @endif
@endsection