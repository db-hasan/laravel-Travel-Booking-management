<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('backend/css/style.css') }} ">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css') }} ">
    <title>Document</title>
</head>
<body>
    <div class="m-5 p-5 w-50">
        <form action="admin/login" method="post">
        @csrf
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if(Session::has('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif
            <div class="mb-3">
                <label for="user_email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="user_email" name="user_email" value="{{old('user_email')}}">
                @error('user_email')
                <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>