@extends('/backend.back')

@section('admincontent')
    <div class="row">
        <div class="col-6">
            <form action="{{ url('/admin/kategori') }}" method="post">
                @csrf

                @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif

                <div class="mt-2">
                    <label class="form-label" for="">Nama Kategori</label>
                    <input class="form-control" value="{{ old('kategori') }}" type="text" name="kategori" id="">
                    <span class="text-danger">
                        @error('kategori')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit" name="submit">Tambah Kategori</button>
                </div>
            </form>
        </div>
    </div>
@endsection
