@extends('layouts.main')

@section('container')
<section class="vh-100">
<!-- <svg style="position: absolute;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,192L60,170.7C120,149,240,107,360,117.3C480,128,600,192,720,213.3C840,235,960,213,1080,197.3C1200,181,1320,171,1380,165.3L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg> -->
    <div class="row">
      <div class="wrapper">
      @if (session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session ('success') }}
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
      
      
      @if (session('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session ('loginError') }}
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
         <div class="logo">
            <img src="/img/logo-wk.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            Teaching Faktory
        </div>
        <form action="/login" method="POST" class="p-3 mt-3">
         @csrf
            <div class="form-field d-flex align-items-center">
                <span class="fa-regular fa-envelope"></span>
                <input type="text" name="username" class="form-control mt-2 @error('email') is-invalid @enderror" id="email" placeholder="username" autofocus required >
                <!-- @error('email')
                    <div class="invalid-feedback">
                        {{ $message}}
                    </div>
                 @enderror -->
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" class="@error('password') is-invalid @enderror" id="password" placeholder="Password" required >
                <!-- @error('password')
                     <div class="invalid-feedback">
                        {{ $message}}
                    </div>
                @enderror -->
            </div>
            <div class="pt-1 mb-4">
                <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Login</button>
            </div>
            <small class="d-block text-center mt-3">Belum punya akun? <a href="/register">Register</a></small>
        </form>
        <div class="text-center fs-6">
        </div>
        </div>
    </div>
</section> 

<style>
    body {
        background-image: url(/img/1.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

@endsection