@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="text-center">
        <div class="card mx-auto shadow-lg border-0" style="max-width: 600px; border-radius: 20px;">
            <div class="card-body bg-light" style="border-radius: 20px;">
                <h1 class="display-4 text-primary mb-4 fw-bold">Welcome to Activity 9</h1>
                <p class="lead text-secondary mb-5">
                    This is the <strong>Landing Page</strong>.  
                    You are currently browsing as a guest.  
                    Please log in or register to access your dashboard.
                </p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="{{ route('login') }}" class="btn btn-outline-primary btn-lg px-4 me-3">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-4">
                        <i class="fas fa-user-plus"></i> Register
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
