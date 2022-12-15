@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-md-4">
    
    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">Close</button>
      </div>
    @endif

    @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">Close</button>
      </div>
    @endif
    
    <main class="form-signin w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
      <form action="/login" method="post">
        @csrf
        <div class="form-floating">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
          @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
          {{-- <label for="floatingInput">Email address</label> --}}
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
          {{-- <label for="floatingPassword">Password</label> --}}
        </div>
    
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

      </form>
      <small class="d-none text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
    </main>
  </div>
</div>


@endsection