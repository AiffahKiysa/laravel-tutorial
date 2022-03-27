@extends('template')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-3">

        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <main class="form-signin">
            <p style="text-align:center" > <img class="mb-4" src="logo.png" alt= "logo" style="width:70px">
            <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
            </p>
            <form action="/login" method="post">
                @csrf
            <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" autofocus required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
                <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-dark" type="submit">Login</button>
            </form>

            <small class="d-block text-center mt-3">
                Not registered? <a href="/register">Register Now</a>
            </small>
        </main>
    </div>
</div>
@include('sweetalert::alert')
  @endsection