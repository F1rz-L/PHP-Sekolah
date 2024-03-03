@extends('/backend.back')

@section('admincontent')
    <div class="">
        <h1>Semua User</h1>
    </div>
    <div class="">
        @if(session()->has('error'))
            <p class="mt-2 alert alert-danger">{{ session()->get('error') }}</p>
        @endif
        <a href="{{ url('/admin/user/create') }}" class="btn btn-success">Tambah Data</a>
    </div>
    <div class="">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Ubah</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            @php
                $no = 0;
            @endphp
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $no += 1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->level }}</td>
                        <td><a href="{{ url('/admin/user/'.$user->id.'/edit') }}" class="btn btn-secondary">Ubah Password</a></td>
                        <td><a href="{{ url('/admin/user/'.$user->id) }}" class="btn btn-danger">Hapus</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
