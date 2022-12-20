@extends('layouts.main')
  
@section('container')
  <!-- <div class="row justify-content-center">
            <div class="col-lg-5"> -->
                <!-- {{-- Jika kita berhasil melakukan registrasi alert ini akan muncul , alert ini diatur didalam RegisterController --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session ('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif -->
                <!-- <div class="col-sm-6 text-black">
                          <div class="px-5 ms-xl-4">
                              <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                            <img src="/img/logo5.png" height="200" width="400px">
                           </div> -->
                 <!-- <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                    <main class="form-register">
                         <form action="/register" method="POST" style="width: 23rem;">
                           @csrf
                            <h1 class="h3 mb-3 fw-normal">Register</h1> -->

                            <!-- <div class="form-outline mb-4">
                                <input type="text" name="name" class="form-control mt-2" id="name" placeholder="name">
                                <label for="name">Name</label>
                            </div> -->
                            <!-- <div class="form-outline mb-4">
                                <input type="email" name="email" class="form-control mt-2" id="email" placeholder="name@example.com">
                                <label for="email">Email address</label>
                            </div> -->
                            <!-- <div class="form-outline mb-4">
                                <input type="password" name="password" class="form-control mt-2" id="password" placeholder="Password">
                                <label for="password">Password</label>
                            </div> -->

                            <!-- <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Submit</button> -->
                            
                        </form>
                        <!-- <small class="d-block text-center mt-3">Sudah punya akun? <a href="/login">Login</a></small> -->
                    <!-- </main>
                 </div>
                </div> -->
            <!-- </div>
             <div class="col-sm-6 px-0 d-none d-sm-block"> -->
                        <!-- <br>
                        <br>
                        <br>
                        <br>
                        <br>
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                class="img-fluid" alt="Phone image">
             </div> -->
        <!-- </div> -->

        <!-- Section: Design Block -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-image: url(/img/10.png);">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
             <img src="/img/logo5.png" height="200" width="400px">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            Wikrama Airlines<br />
            <span class="text-primary">the best flight for you</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eveniet, itaque accusantium odio, soluta, corrupti aliquam
            quibusdam tempora at cupiditate quis eum maiores libero
            veritatis? Dicta facilis sint aliquid ipsum atque?
          </p>
        </div>

        <div class="col-lg-5 mb-5 mb-lg-10">
          <div class="card">
            {{-- Jika kita berhasil melakukan registrasi alert ini akan muncul , alert ini diatur didalam RegisterController --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session ('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            <div class="card-body py-5 px-md-5 ">
                <form action="/register" method="POST" style="width: 23rem;">
                  @csrf
                    <h1 class="h3 mb-3 fw-normal ">Register</h1>
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="form-outline mb-4">
                        <input type="text" name="name" class="form-control mt-2" id="name" placeholder="name">
                        <label for="name">Name</label>
                    </div>

                    <!-- username input -->
                    <div class="form-outline mb-4">
                    <input type="username" name="email" class="form-control mt-2" id="username" placeholder="username">
                        <label for="username">Email address</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                    <input type="email" name="email" class="form-control mt-2" id="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                    <input type="password" name="password" class="form-control mt-2" id="password" placeholder="Password">
                    <label for="password">Password</label>
                    </div>

                    <!-- Checkbox -->
                    <!-- <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                    <label class="form-check-label" for="form2Example33">
                        Subscribe to our newsletter
                    </label>
                    </div> -->

                    <!-- Submit button -->
                    <!-- <button type="submit" class="btn btn-primary btn-block mb-4">
                    Sign up
                    </button> -->

                    <!-- Register buttons -->
                    <!-- <div class="text-center">
                    <p>or sign up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                    </div> -->
                    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Submit</button>
              </form>
              <small class="d-block text-center mt-3">Sudah punya akun? <a href="/login">Login</a></small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
    @endsection