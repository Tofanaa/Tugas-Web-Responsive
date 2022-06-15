@extends('app')
@section('content')
@auth
<div class="d-flex justify-content-center m-5">
<p class="text-center">Welcome, {{ Auth::user()->name }}</p> 
</div>
<div class="d-flex justify-content-center d-grid gap-2 m-5">
<a class="btn btn-primary shadow" href="{{ route('password') }}">Change Password</a>
<a class="btn btn-danger shadow" href="{{ route('logout') }}">Logout</a>
</div>
@endauth
@guest
<div class="d-flex justify-content-center d-grid gap-2 m-5">
<a class="btn btn-primary shadow" href="{{ route('login') }}">Login</a>
<a class="btn btn-info shadow" href="{{ route('register') }}">Register</a>
</div>
@endguest
@endsection