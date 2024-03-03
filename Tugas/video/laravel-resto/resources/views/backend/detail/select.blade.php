@extends('/backend.back')

@section('admincontent')
    <div class="">
        <h1>Detail Order</h1>
    </div>


    <form action="{{ url('/admin/orderdetail/create') }}" method="get">
        <div class="row">
            <div class="mt-2 col-4">
                <label class="form-label" for="">From : </label>
                <input class="form-control" type="date" name="tglmulai" id="">
            </div>
            <div class="mt-2 col-4">
                <label class="form-label" for="">To : </label>
                <input class="form-control" type="date" name="tglakhir" id="">
            </div>

            <div class="my-4 col-4">
                <p></p>
                <button class="btn btn-primary" type="submit" name="submit">Cari</button>
            </div>
        </div>
    </form>

    <div class="">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Pelanggan</th>
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
                @foreach ($details as $detail)
                    <tr>
                        <td>{{ $no += 1 }}</td>
                        <td>{{ $detail->tglorder }}</td>
                        <td>{{ $detail->pelanggan }}</td>
                        <td>{{ $detail->menu }}</td>
                        <td>{{ number_format($detail->harga) }}</td>
                        <td>{{ $detail->jumlah }}</td>
                        <td>{{ $detail->total }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{ $details->withQueryString()->links() }}
        </div>
    </div>
@endsection
