@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card shadow p-4 bg-light text-dark" style="width: 400px;">
        <h3 class="text-center text-primary mb-4">Login</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" required autofocus>
            </div>
            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
            <p class="mt-3 text-center">
                <a href="{{ route('register') }}">Don’t have an account? Register</a>
            </p>
        </form>
    </div>
</div>
@endsection