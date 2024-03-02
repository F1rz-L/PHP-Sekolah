@extends('/backend.back')

@section('admincontent')
    <div class="">
        <h1>Daftar Menu</h1>
    </div>
    <div class="">
        <a href="{{ url('/admin/menu/create') }}" class="btn btn-success">Tambah Data</a>
    </div>
    <div class="">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Menu</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Harga</th>
                    <th>Ubah</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            @php
                $no = 0;
            @endphp
            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $no += 1 }}</td>
                        <td>{{ $menu->kategori }}</td>
                        <td>{{ $menu->menu }}</td>
                        <td>{{ $menu->deskripsi }}</td>
                        <td><img src="{{ asset('img/'.$menu->gambar) }}" height="64px" alt=""></td>
                        <td>{{ $menu->harga }}</td>
                        <td><a href="{{ url('/admin/kategori/'.$menu->menu.'/edit') }}" class="btn btn-secondary">Ubah</a></td>
                        <td><a href="{{ url('/admin/kategori/'.$menu->menu) }}" class="btn btn-danger">Hapus</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
