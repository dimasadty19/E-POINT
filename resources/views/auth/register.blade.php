@extends('auth.layouts')

@section('content')
<h1>Register</h1>
<a href="{{ route('login') }}">Login</a>
<br><br>
<form action="{{ route('store') }}" method="POST">
    @csrf
    <label>Nama Lengkap</label><br>
    <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control"><br>
    
    @if ($errors->has('name'))
    <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif

    <br>
    <label>Email Address</label><br>
    <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control"><br>

    @if ($errors->has('email'))
    <span class="text-danger">{{ $errors->first('email') }}</span>
    @endif

    <br>
    <label>Password</label><br>
    <input type="password" id="password" name="password" class="form-control"><br>

    @if ($errors->has('password')) 
    <span class="text-danger">{{ $errors->first('password') }}</span>
    @endif

    <br>
    <label for="password_confirmation">Confirm Password</label><br>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"><br>

    <input type="submit" value="Register" class="btn btn-primary">
</form>
@endsection