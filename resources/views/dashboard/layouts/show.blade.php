@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-7">

                <h1 class="mb-3">{{ $project ["title"] }}</h1>

                 <a href="/dashboard/projects" class="btn btn-success" ><span data-feather="arrow-left"></span> Back to my project</a>

                 <a href="/dashboard/projects/{{ $project->slug }}/edit" class="btn btn-warning" ><span data-feather="edit"></span> Edit</a>

                 <form action="/dashboard/projects/{{ $project->slug }}" method="POST" class="d-inline">
                       @method('delete')
                       @csrf
                      <button class="btn btn-danger border-0 btn-delete" onclick="return confirm('Apakah anda yakin ingin menghapus postingan ini?')"><i class="fas fa-trash"></i></button>
                  </form>

                  @if ($project->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $project->image) }}" alt=" {{ $project->major->name }}" class="img-fluid mt-3" >
                    </div>
                  @else
                    <br>
                    <br>
                    <!-- <img src="https://source.unsplash.com/1200x400/?{{ $project ->major->name }}" class="card-img-top" alt="{{$project->major->name }}"> -->
                    <img src="/img/1.jpg " class="card-img-top " alt="{{$project->major->name }}">
                  @endif

                <p>{!! $project->body !!}</p>

            </div>
        </div>
    </div>
@endsection