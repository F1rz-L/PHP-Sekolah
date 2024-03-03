@extends('/backend.back')

@section('admincontent')
    <div class="row">
        <div>
            <h1>{{ number_format($order->total) }}</h1>
        </div>
        <div class="col-6">
            <form action="{{ url('/admin/order/'.$order->idorder) }}" method="post">
                @csrf
                @method('put')

                @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif

                <div class="mt-2">
                    <label class="form-label" for="">Bayar</label>
                    <input class="form-control" min="{{ $order->total }}" value="{{ $order->total }}" type="number" name="bayar" id="">
                    <span class="text-danger">
                        @error('bayar')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit" name="submit">Bayar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
