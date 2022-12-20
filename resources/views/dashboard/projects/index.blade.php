@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-lg-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3 mb-3 border-bottom border-dark">

      <h2>My projects</h2>

    </div>

    @if(session()->has('berhasil'))
      <div class="alert alert-success col-lg-10" role="alert">
        {{ session('berhasil')}}
      </div>
    @endif

    <div class="table-responsive col-lg-10">
    <a href="/dashboard/projects/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Create New Project </a>
        <table class="table table-striped table-dark table-sm table-bordered">
          <thead>
            <tr class="text-center">
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Major</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ( $posts as $post)
            <tr>
              <td class="text-center">{{ $loop->iteration }}</td>
              <td class="text-center">{{ $post->title }}</td>
              <td class="text-center">{{ $post->major->name }}</td>
              <td class="text-center">
                <a href="/dashboard/projects/{{ $post->slug }}/edit" class="badge bg-warning text-dark me-1"><i class="fas fa-edit"></i></a>
                <a href="/dashboard/projects/{{ $post->slug }}" class="badge bg-info text-dark me-1"><i class="fas fa-eye"></i></a>
                  <form action="/dashboard/projects/{{ $post->slug }}" method="POST" class="d-inline">
                       @method('delete')
                       @csrf
                      <button class="badge bg-danger border-0 btn-delete" onclick="return confirm('Apakah anda yakin ingin menghapus postingan ini?')"><i class="fas fa-trash"></i></button>
                  </form>
              </tr>
            @endforeach
          </tbody>
        </table>
    </div>
    </div>
@endsection