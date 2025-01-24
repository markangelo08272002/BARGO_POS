@extends('layouts.main')

@section('content')
<title>Dashboard - Bargo Pos</title>
<div class="container-xxl flex-grow-1 container-p-y">
   <!-- Flash Success Message -->
    @if(session('success'))
        <div class="alert alert-success" role="alert"> 
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-xxl-8 mb-6 order-0">
            <div class="card">
                <div class="d-flex align-items-start row">
                  <div class="col-sm-7">
                    <div class="card-body">
                      <h5 class="card-title text-primary mb-3">WELCOME BACK !! <br>{{ auth()->user()->name }} 🎉</h5>
                    </div>
                  </div>
                  <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-6">
                      <img
                        src="{{asset('assets/img/illustrations/man-with-laptop.png')}}"
                        height="175"
                        class="scaleX-n1-rtl"
                        alt="View Badge User" />
                    </div>
              </div>
        </div>
    </div>
</div>
 <div class="col-lg-12 col-md-12 order-1">
  <div class="row d-flex justify-content-start">
    <div class="col-lg-2 col-md-3 col-5 mb-6">
      <div class="card h-100">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between mb-4">
            <div class="avatar flex-shrink-0">
              <img src="../assets/img/icons/unicons/icon.jpg" alt="chart success" class="rounded" />
            </div>
          </div>
          <p class="mb-1">User</p>
          <h5 class="card-title mb-3">Total : {{ $userCount }}</h5>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-5 mb-6">
      <div class="card h-100">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between mb-4">
            <div class="avatar flex-shrink-0">
              <img src="../assets/img/icons/unicons/icon2.png" alt="chart success" class="rounded" />
            </div>
          </div>
          <p class="mb-1">Product</p>
          <h5 class="card-title mb-3">Total : {{ $productCount }}</h5>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-3 col-5 mb-6">
      <div class="card h-100">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between mb-4">
            <div class="avatar flex-shrink-0">
              <img src="../assets/img/icons/unicons/icon3.jpg" alt="chart success" class="rounded" />
            </div>
          </div>
          <p class="mb-1">Category</p>
          <h5 class="card-title mb-3">Total : {{ $categoryCount }}</h5>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

<div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
        <div class="row">
        </div>
    </header>

   
   
</div>
@endsection
