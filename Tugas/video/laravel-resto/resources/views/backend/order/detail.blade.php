@extends('/backend.back')

@section('admincontent')
    <div class="">
        <h1>Detail Order</h1>
    </div>
    <div class="">
        <h4>Pelanggan : {{ $orders[0]['pelanggan'] }}</h4>
        <h4>Total : {{ number_format($orders[0]['total']) }}</h4>
    </div>
    <div class="mt-5">
        <h4>Pesanan:</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </tr>
            </thead>
            @php
                $no = 0;
            @endphp
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $no += 1 }}</td>
                        <td>{{ $order->menu }}</td>
                        <td>Rp{{ number_format($order->harga) }}</td>
                        <td>{{ $order->jumlah }}</td>
                        <td>Rp{{ number_format($order->total) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
