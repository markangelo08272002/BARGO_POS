@extends('layouts.auth')

@section('content')
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card px-sm-6 px-0">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center mb-6">
                <a href="index.html" class="app-brand-link gap-2">
                  
                  <span class="app-brand demo menu-text fw-bold ms-2">
              <img src="{{ asset('assets/img/slsu-logo.png') }}" alt="Logo" class="logo-img" style="width: 200px; height: auto;padding-right: 50px">
              
          </span>
                </a>
              </div>
              <!-- /Logo -->
               <h4 class="mb-1">Welcome to Bargo Pos! 👋</h4>
              <p class="mb-6">Please sign-up to create an account</p>

              <form class="mb-6" method="POST" action="{{ route('register.post') }}">
              @csrf

              @session('error')
                  <div class="alert alert-danger" role="alert"> 
                      {{ $value }}
                  </div>
              @endsession
                <div class="mb-6">
                  <label for="name" class="form-label">{{ __('Name') }}</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" required>
                </div>
                @error('name')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="mb-6">
                  <label for="id_number" class="form-label">{{ __('ID Number') }}</label>
                  <input type="text" class="form-control @error('id_number') is-invalid @enderror" name="id_number" id="id_number" placeholder="ID Number" required>
                </div>
                @error('id_number')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror    
                <div class="mb-6">
                  <label for="email" class="form-label">{{ __('Email Address') }}</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required>
                </div>
                @error('email')
                        <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror   
                  <div class="mb-6">
                  <label for="password" class="form-label">{{ __('Password') }}</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="" placeholder="Password" required>
                </div>
                @error('password')
                      <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                <div class="mb-6">
                  <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                  <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" value="" placeholder="password_confirmation" required>
                </div>
                @error('password_confirmation')
                      <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                <div class="my-8">
                  <div class="form-check mb-0 ms-2">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                    <label class="form-check-label" for="terms-conditions">
                      I agree to
                      <a href="javascript:void(0);">privacy policy & terms</a>
                    </label>
                  </div>
                </div>
                <button class="btn btn-primary d-grid w-100" type="submit">{{ __('Register') }}</button>
              </form>

              <p class="text-center">
                <span>Already have an account?</span>
                <a href="{{ route('login') }}" class="link-primary text-decoration-none">Sign in</a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>
@endsection