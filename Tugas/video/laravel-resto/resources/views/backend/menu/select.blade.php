@extends('/backend.back')

@section('admincontent')
    <div class="">
        <h1>Daftar Menu</h1>
    </div>
    <div class="">
        <a href="{{ url('/admin/menu/create') }}" class="btn btn-success">Tambah Data</a>
    </div>
    <div class="row mt-3">
        <div class="col-4 mb-3">
            <form action="{{ url('/admin/select') }}" method="get">
                <select class="form-select" name="idkategori" onchange="this.form.submit()">
                    <option value="">--- Pilih Kategori ---</option>
                    @foreach($kategoris as $kategori)
                        <option value="{{ $kategori->idkategori }}">{{ $kategori->kategori }}</option>
                    @endforeach
                </select>
            </form>
        </div>
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
                        <td><a href="{{ url('/admin/menu/'.$menu->idmenu.'/edit') }}" class="btn btn-secondary">Ubah</a></td>
                        <td><a href="{{ url('/admin/menu/'.$menu->idmenu) }}" class="btn btn-danger">Hapus</a></td>
                    </tr>
                @endforeach
                @if(count($menus) == 0)
                    <tr>
                        <td colspan="8" class="text-center text-bg-secondary">Tidak ada data.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center mt-2">
        {{ $menus->withQueryString()->links() }}
    </div>
@endsection
