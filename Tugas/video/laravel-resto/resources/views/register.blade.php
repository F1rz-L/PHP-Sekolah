@extends('front')

@section('content')
    <div class="row">
        <div class="col-6">
            <form action="" method="post">
                <div class="mt-2">
                    <label class="form-label" for="">Pelanggan</label>
                    <input class="form-control" type="text"  name="pelanggan" id="">
                </div>
                <div class="mt-2">
                    <label class="form-label" for="">Jenis Kelamin</label>
                    <select class="form-select" name="jeniskelamin" id="">
                        <option value="l" selected>Laki-laki</option>
                        <option value="p">Perempuan</option>
                    </select>
                </div>
                <div class="mt-2">
                    <label class="form-label" for="">Alamat</label>
                    <input class="form-control" type="text" name="alamat" id="">
                </div>
                <div class="mt-2">
                    <label class="form-label" for="">No. Telp</label>
                    <input class="form-control" type="number" name="telp" id="">
                </div>
                <div class="mt-2">
                    <label class="form-label" for="">Email</label>
                    <input class="form-control" type="email" name="email" id="">
                </div>
                <div class="mt-2">
                    <label class="form-label" for="">Password</label>
                    <input class="form-control" type="password" name="password" id="">
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit" name="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection