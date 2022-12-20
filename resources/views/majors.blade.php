@extends('layouts.main')

@section('container')
    <h1 class="text-center">Majors</h1><br><br>
    <div class="container">
        <div class="row">
            @foreach ($majors as $major)
                <div class="card">
                    <a href="/majors/{{$major->slug }} "class="text-dark text-decoration-none">
                        <h5 class="card-body text-center p-90 fs-3 " >{{ $major->name }}</h5>
                    </a>
                </div>                  
            @endforeach
        </div>
    </div>

    <style>

     .card {
       max-width: 400px;
       min-height: 80px;
       margin: 40px auto;
       padding: 30px 30px 30px 30px;
       background-color: #ecf0f3;
       border-radius: 15px;
       box-shadow: 13px 13px 20px #d3d2d2, -13px -13px 20px rgb(239, 237, 237);
   }
    </style>
@endsection


