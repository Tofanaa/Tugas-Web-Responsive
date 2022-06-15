@extends('app')
@section('content')
<div class="row">
    <div class="col">
        @if ($errors->any())
        @foreach ($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form method="POST" action="{{ route('register.action') }}">
            @csrf
            <div class="mb-3">
                <label>Name <span class="text-danger">*</span></label>
                <input class="form-control" name="name" type="text" value="{{ old('name') }}" />
            </div>
            <div class="mb-3">
                <label>Username <span class="text-danger">*</span></label>
                <input class="form-control" name="username" type="text" value="{{ old('username') }}" />
            </div>
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" name="password" type="password" />
            </div>
            <div class="mb-3">
                <label>Confirm Password <span class="text-danger">*</span></label>
                <input class="form-control" name="password_confirmation" type="password" />
            </div>
            <div class="d-flex justify-content-center d-grid gap-2 m-4">
                <button class="btn btn-primary">Register</button>
                <a class="btn btn-danger" href="{{ route('home') }}">Back</a> 
            </div>
        </form>
    </div>
</div>
@endsection