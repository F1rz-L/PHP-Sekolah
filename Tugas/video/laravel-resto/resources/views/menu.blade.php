@extends('front')

@section('content')
    <div class="row">
        @foreach ($menus as $menu)
            <div class="card mx-2 mb-2" style="width: 18rem;">
                <img src="{{ asset('img/' . $menu->gambar) }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $menu->menu }}</h5>
                    <p class="card-text">{{ $menu->deskripsi }}</p>
                    <p class="card-title">{{ $menu->harga }}</p>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
