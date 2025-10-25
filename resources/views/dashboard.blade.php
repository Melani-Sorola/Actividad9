@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0 bg-white text-center" style="border-radius: 20px;">
        <div class="card-body p-5">
            <h1 class="display-5 text-success fw-bold mb-4">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </h1>
            <p class="lead text-muted mb-5">
                Welcome back, <span class="text-dark fw-bold">{{ Auth::user()->name }}</span> 🎉  
                You are now logged in to your secure area.
            </p>
            <a href="{{ route('logout') }}" 
               class="btn btn-danger btn-lg px-4"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</div>
@endsection

