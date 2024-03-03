@extends('/backend.back')

@section('admincontent')
    <div class="">
        <h1>Semua Order</h1>
    </div>
    <div class="">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pelanggan</th>
                    <th>Tanggal Order</th>
                    <th>Total Pembelian</th>
                    <th>Total Pembayaran</th>
                    <th>Kembali</th>
                    <th>Status</th>
                </tr>
            </thead>
            @php
                $no = 0;
            @endphp
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $no += 1 }}</td>
                        <td><a href="{{ url('/admin/order/'.$order->idorder.'/edit') }}">{{ $order->pelanggan }}</a></td>
                        <td>{{ $order->tglorder }}</td>
                        <td>Rp{{ number_format($order->total) }}</td>
                        <td>Rp{{ number_format($order->bayar) }}</td>
                        <td>Rp{{ number_format($order->kembali) }}</td>
                        @php
                            $status = "Lunas";
                            if ($order->status == 0) {
                                $status = '<a href=" '.url('/admin/order/'.$order->idorder).' ">Bayar</a>';
                            }
                        @endphp
                        <td>{!! $status !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-2">
            {{ $orders->withQueryString()->links() }}
        </div>
    </div>
@endsection
