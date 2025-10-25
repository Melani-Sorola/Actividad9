@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-body text-center bg-light text-dark rounded">
            <h2 class="text-success">Welcome back, {{ Auth::user()->name }} 🎉</h2>
            <p class="lead">You are successfully logged in.</p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-danger mt-3">Logout</button>
            </form>
        </div>
    </div>
</div>
@endsection