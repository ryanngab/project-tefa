@extends('layouts.main')
@section('container')
  <!-- Jumbotron -->
    <!-- <div class="container"> -->

                   <!-- Section: Design Block -->
      <!-- <div class="card" style="background-color: rgba(233, 228, 228, 0.641)";>
        <div class="card-body">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            Wikrama Airlines<br />
            <span class="text-primary">the best flight for you</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            Lorem 
          </p>
        </div>
      </div> -->

        <div class="container col-lg-5 mb-5 mb-lg-10" style="align-items: center;">
          <div class="card">
            {{-- Jika kita berhasil melakukan registrasi alert ini akan muncul , alert ini diatur didalam RegisterController --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session ('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            <div class="card-body py-5 px-md-5 ">
                    <div class="logo">
                    <img src="/img/logo-wk.png" alt="">
                </div>
                <div class="text-center mt-4 name">
                    Silahkan Registerasi 
                </div>
                <form action="/register" method="POST">
                  @csrf
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control mt-2 @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                          <div class="invalid-feedback">
                            {{ $message}}
                          </div>
                        @enderror
                    </div>
                    
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control mt-2 @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                          <div class="invalid-feedback">
                            {{ $message}}
                          </div>
                        @enderror
                    </div>

                     <!-- Email input -->
                     <div class="form-floating">
                        <input type="email" name="email" class="form-control mt-2 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                          <div class="invalid-feedback">
                            {{ $message}}
                          </div>
                        @enderror
                    </div>                    

                    <!-- Password input -->
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control mt-2 @error('password') is-invalid @enderror" id="password" placeholder="Password" required >
                        <label for="password">Password</label>
                        @error('password')
                          <div class="invalid-feedback">
                            {{ $message}}
                          </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Submit</button>
              </form>
              <small class="d-block text-center mt-3">Sudah punya akun? <a href="/login">Login</a></small>
            </div>
          </div>
        </div>
    </div>
  <!-- Jumbotron -->
</section> 
<style>
  body{
   background-image: url(/img/1.jpg);
        background-repeat: no-repeat;
        background-size: cover;  
  }
</style>

@endsection