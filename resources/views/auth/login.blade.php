<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BARGO - POS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <style type="text/css">
    body{
      background: #F8F9FA;
    }
  </style>
</head>
<body>

<section class="bg-light py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <div class="card border border-light-subtle rounded-3 shadow-sm mt-5">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <h1 class="fs-1 fw-normal text-center text-secondary mb-4">Sign in to your account</h1>
            <form method="POST" action="{{ route('login.post') }}">
    @csrf

    <div class="form-floating mb-3">
        <input type="text" class="form-control @error('id_number') is-invalid @enderror" name="id_number" id="id_number" placeholder="ID Number" required>
        <label for="id_number" class="form-label">{{ __('ID Number') }}</label>
    </div>
    @error('id_number')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <!-- Password Input -->
    <div class="form-floating mb-3">
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
        <label for="password" class="form-label">{{ __('Password') }}</label>
    </div>
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
<div class="col-12">
                  <div class="d-grid my-3">
                  <button class="btn btn-primary btn-lg" type="submit">{{ __('Login') }}</button><br><br>
                  </div>
                </div>
    
    <div class="col-12">
                  <p class="m-0 text-secondary text-center">Don't have an account? <a href="{{ route('register') }}" class="link-primary text-decoration-none">Sign up</a></p>
                </div>
    
</form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>
