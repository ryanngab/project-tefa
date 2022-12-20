@extends('layouts.main')

@section('container')
        <h1 class="mb-5 text-center">{{ $title }}</h1>

        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <form action="/projects">
                    @if(request('major'))
                        <input type="hidden" name="major" value="{{ request('major')}}">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="search.." name="search" value="{{ request('search')}}">
                        <button class="btn btn-dark" type="submit">search</button>
                    </div>
                </form>
            </div>
        </div>

  @if ($projects->count())

    <div class="card my-5">
        
         @if ($projects[0]->image)
              <div style="max-height: 500px; width: 100%; overflow: hidden">
                 <img src="{{ asset('storage/' . $projects[0]->image) }}" alt=" {{ $projects[0]->major->name }}" class="img-fluid" >
              </div>
            @else
              <br>
              <br>
                 <!-- <img src="https://source.unsplash.com/1200x400/?{{ $projects[0]->major->name }}" class="card-img-top" alt="{{$projects[0]->major->name }}"> -->
            <img src="/img/1.jpg " class="card-img-top " alt="{{$projects[0]->major->name }}">
         @endif
        <!-- <img src="https://source.unsplash.com/1200x400/?{{ $projects[0]->major->name }}" class="card-img-top" alt="{{$projects[0]->major->name }}"> -->
        <div class="card-body text-center">
            <h3 class="card-title"><a href="/projects/{{ $projects[0]->slug}}" class="text-decoration-none text-dark">{{$projects[0]->title }}</a></h3>
            <p>
                <small class="text-muted">
                    By.<a href="/authors/{{ $projects[0]->user->username }}" class="text-decoration-none"> {{ $projects[0]->user->name}} 
                    </a> in <a href="/projects?major={{ $projects[0]->major->slug }}" class="text-decoration-none"> {{$projects[0]->major->name }}</a>
                    {{ $projects[0]->created_at->diffForHumans() }}<!---diffFOrHumans unutk memudahkan manusia membaca-->
                </small>
            </p>
            <p class="card-text">{{ $projects[0]->excerpt }}</p>

            <a href="/projects/{{$projects[0]->slug}} " class="text-decoration-none  btn btn-primary">Read More</a>

        </div>
    </div>



    <div class="container">
        <div class="row">
        @foreach ($projects->skip(1) as $projects)<!-- Ini Halaman All Projects--->
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.7)">
                    <a href="/projects?major={{ $projects->major->slug }}" class="text-white text-decoration-none">{{$projects->major->name }}</a></div>
                    <!-- <img src="https://source.unsplash.com/500x400/ {{$projects->major->name }}" --->
                    @if ($projects->image)
                            <div style="max-height: 350px; overflow:hidden">
                                <img src="{{ asset('storage/' . $projects->image) }}" alt=" {{ $projects->major->name }}" class="img-fluid" >
                            </div>
                        @else
                            <br>
                            <br>
                            <!-- <img src="https://source.unsplash.com/1200x400/?{{ $projects ->major->name }}" class="card-img-top" alt="{{$projects->major->name }}"> -->
                            <img src="/img/1.jpg " class="card-img-top " alt="{{$projects->major->name }}">
                     @endif
                    <div class="card-body">
                    <h5 class="card-title">{{ $projects->title }}</h5>
                            <p>
                            <small class="text-muted">
                                By.<a href="/authors/{{ $projects->user->username }}" class="text-decoration-none"> {{ $projects->user->name}} 
                                </a> in <a href="/majors/{{ $projects->major->slug }}" class="text-decoration-none"> {{$projects->major->name }}</a>
                                {{ $projects->created_at->diffForHumans()}}
                            </small>
                            </p>
                            <p class="card-text">{{ $projects->excerpt }}</p>
                        <a href="/projects/{{$projects->slug}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>

@else
<p class="text-center fs-4">No project found</p>
@endif

@endsection