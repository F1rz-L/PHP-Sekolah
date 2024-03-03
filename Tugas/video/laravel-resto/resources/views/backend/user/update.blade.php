@extends('/backend.back')

@section('admincontent')
    <div class="row">
        <div class="col-6">
            <form action="{{ url('/admin/kategori/'.$user->id) }}" method="post">
                @csrf
                @method('put')

                @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif

                <div class="mt-2">
                    <label class="form-label" for="">Password</label>
                    <input class="form-control" type="text" name="password" id="">
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit" name="submit">Perbarui</button>
                </div>
            </form>
        </div>
    </div>
@endsection
