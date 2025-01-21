@extends('layouts.auth')

@section('content')
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card px-sm-6 px-0">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="#" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                  </span>
                  <span class="app-brand demo menu-text fw-bold ms-2">
              <img src="{{ asset('assets/img/slsu-logo.png') }}" alt="Logo" class="logo-img" style="width: 200px; height: auto;padding-right: 50px">
              
          </span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-1">Welcome to Bargo Pos! 👋</h4>
              <p class="mb-6">Please sign-in to your account</p>

              <form method="POST" action="{{ route('login.post') }}" class="mb-6">
                @csrf
                <div class="mb-6">
                  <label for="id_number" class="form-label">{{ __('ID Number') }}</label>
                  <input type="text" class="form-control @error('id_number') is-invalid @enderror" name="id_number" id="id_number" placeholder="ID Number" required>
                </div>
                 @error('id_number')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
                <div class="mb-6 form-password-toggle">
                  <label for="password" class="form-label">{{ __('Password') }}</label>
                  <div class="input-group input-group-merge">
                     <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                 @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="mb-8">
                  <div class="d-flex justify-content-between mt-8">
                     <div class="form-check mb-0 ms-2">
                      <label class="form-check-label" for="remember-me">
                        <input  class="form-check-input" name="remember" type="checkbox" name="remember"> Remember Me
                    </label>    
                    </div>
                  </div>
                </div>
                <div class="mb-6">
                   <button class="btn btn-primary d-grid w-100" type="submit">{{ __('Login') }}</button><br>
                </div>
              </form>

              <p class="text-center">
                <span>New on our platform?</span>
                <a href="{{ route('register') }}" class="link-primary text-decoration-none">
                  <span>Create an account</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>
@endsection