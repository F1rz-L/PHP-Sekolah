@extends('/backend.back')

@section('admincontent')
    <div class="">
        <h1>Kategori</h1>
    </div>
    <div class="">
        <a href="{{ url('/admin/kategori/create') }}" class="btn btn-success">Tambah Data</a>
    </div>
    <div class="">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Ubah</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            @php
                $no = 0;
            @endphp
            <tbody>
                @foreach ($kategoris as $kategori)
                    <tr>
                        <td>{{ $no += 1 }}</td>
                        <td>{{ $kategori->kategori }}</td>
                        <td><a href="{{ url('/admin/kategori/'.$kategori->idkategori.'/edit') }}" class="btn btn-secondary">Ubah</a></td>
                        <td><a href="{{ url('/admin/kategori/'.$kategori->idkategori) }}" class="btn btn-danger">Hapus</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
