@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card shadow p-4 bg-light text-dark" style="width: 400px;">
        <h3 class="text-center text-success mb-4">Register</h3>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input id="name" type="text" class="form-control" name="name" required autofocus>
            </div>
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group mb-3">
                <label for="password-confirm">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Register</button>
            <p class="mt-3 text-center">
                <a href="{{ route('login') }}">Already have an account? Login</a>
            </p>
        </form>
    </div>
</div>
@endsection