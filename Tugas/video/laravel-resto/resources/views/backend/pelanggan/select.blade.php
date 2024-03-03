@extends('/backend.back')

@section('admincontent')
    <div class="">
        <h1>Pelanggan</h1>
    </div>
    <div class="">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pelanggan</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Status</th>
                </tr>
            </thead>
            @php
                $no = 0;
            @endphp
            <tbody>
                @foreach ($pelanggans as $pelanggan)
                    <tr>
                        <td>{{ $no += 1 }}</td>
                        <td>{{ $pelanggan->pelanggan }}</td>
                        <td>{{ $pelanggan->alamat }}</td>
                        <td>{{ $pelanggan->email }}</td>
                        <td>{{ $pelanggan->telp }}</td>
                        @php
                            if ($pelanggan->aktif == 0) {
                                $aktif = '<a class="btn btn-danger" href="'.url('/admin/pelanggan/'.$pelanggan->idpelanggan).'">Banned</a>';
                            }else {
                                $aktif = '<a class="btn btn-success" href="'.url('/admin/pelanggan/'.$pelanggan->idpelanggan).'">Aktif</a>';
                            }
                        @endphp
                        <td>{!! $aktif !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $pelanggans->withQueryString()->links() }}
        </div>
    </div>
@endsection
