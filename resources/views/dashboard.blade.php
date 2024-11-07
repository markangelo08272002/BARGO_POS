@extends('layouts.main')

@section('content')
<div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
        <div class="row">
        </div>
    </header>

    <!-- Flash Success Message -->
    @if(session('success'))
        <div class="alert alert-success" role="alert"> 
            {{ session('success') }}
        </div>
    @endif

   
</div>
@endsection
