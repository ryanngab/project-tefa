@extends('layouts.main')

@section('container')
             <!---Ini Halaman SIngle--->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

             <h2>{{ $major["title"] }}</h2>

             <p>By. <a href="/authors/{{ $major->user->username }}" class="text-decoration-none" >{{ $major->user->name }}
                
             </a> in <a href="/projects?major={{ $major->major->slug }}" class="text-decoration-none" > {{$major->major->name }}</a></p>


            <!-- <img src="https://source.unsplash.com/1200x400/?{{ $major->major->name }}" class="card-img-top" alt="{{$major->major->name }}"> -->
            @if ($major->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $major->image) }}" alt=" {{ $major->major->name }}" class="img-fluid mt-3" >
                    </div>
                @else
                    <br>
                    <br>
                    <!-- <img src="https://source.unsplash.com/1200x400/?{{ $major ->major->name }}" class="card-img-top" alt="{{$major->major->name }}"> -->
                    <img src="/img/1.jpg " class="card-img-top " alt="{{$major->major->name }}">
             @endif

             <p>{!! $major->body !!}</p>

             <a href="/projects" >back</a>
        </div>
    </div>
</div>
@endsection