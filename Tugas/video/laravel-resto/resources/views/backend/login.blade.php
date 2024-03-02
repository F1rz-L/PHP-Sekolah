<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Backend Login Panel | Restoran</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-4">
                <h1 class="text-center">Login Admin</h1>
                <form action="{{ url('/admin/postlogin') }}" method="post">
                    @csrf
    
                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif
    
                    <div class="mt-2">
                        <label class="form-label" for="">Email</label>
                        <input class="form-control" value="{{ old('email') }}" type="email" name="email" id="">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mt-2">
                        <label class="form-label" for="">Password</label>
                        <input class="form-control" type="password" name="password" id="">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-primary" type="submit" name="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>