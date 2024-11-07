@extends('layouts.main')

@section('content')
<div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
        <div class="row">
            <div class="col-md-11">
                <h1>WELCOME !</h1>         
            </div>
            <div class="col-md-1">
                <a class="dropdown-item" href="{{ route('logout') }}" 
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
                </a>

                <!-- Hidden Logout Form -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </header>

    <!-- Flash Success Message -->
    @if(session('success'))
        <div class="alert alert-success" role="alert"> 
            {{ session('success') }}
        </div>
    @endif

    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Hi, {{ auth()->user()->name }}</h1>
            <!-- Custom Button Style -->
            <button class="btn btn-danger btn-lg" type="button" style="background-color: #007bff; color: white; font-size: 1.25rem; padding: 10px 20px;">
                Dashboard
            </button>
        </div>
    </div>
</div>
@endsection
