@extends('/backend.back')

@section('admincontent')
    <div>
        <h2>Edit Menu</h2>
    </div>
    <div class="row">
        <div class="col-6">
            <form action="{{ url('/admin/postmenu/'.$menu->idmenu) }}" method="post" enctype="multipart/form-data">
                @csrf

                <select class="form-select" name="idkategori">
                    @foreach($kategoris as $kategori)
                        <option @selected($kategori->idkategori == $menu->idkategori) value="{{ $kategori->idkategori }}">{{ $kategori->kategori }}</option>
                    @endforeach
                </select>

                @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif

                <div class="mt-2">
                    <label class="form-label" for="">Nama Menu</label>
                    <input class="form-control" value="{{ $menu->menu }}" type="text" name="menu" id="">
                    <span class="text-danger">
                        @error('menu')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-2">
                    <label class="form-label" for="">Deskripsi</label>
                    <input class="form-control" value="{{ $menu->deskripsi }}" type="text" name="deskripsi" id="">
                    <span class="text-danger">
                        @error('deskripsi')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-2">
                    <label class="form-label" for="">Gambar</label>
                    <input class="form-control" value="{{ $menu->gambar }}" type="file" name="gambar" id="">
                    <span class="text-danger">
                        @error('gambar')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-2">
                    <label class="form-label" for="">Harga</label>
                    <input class="form-control" value="{{ $menu->harga }}" type="number" name="harga" id="">
                    <span class="text-danger">
                        @error('harga')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit" name="submit">Perbarui Kategori</button>
                </div>
            </form>
        </div>
    </div>
@endsection
