@extends('dashboard.layouts.main')

@section('container')
<!-- <div class="d-flex justify-content-lg-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3 mb-3 border-bottom border-dark">
    <h2>Create New Project</h2>
</div> -->

<div class="container mt-5 mb-5">
    <div class="row">
    <div class="col-lg-8">
        <div class="colmd-12">
            <div class="card border-0 shadow rounded">
                <div class="card-header">
                <h2>Edit Project
                    <a  class="btn btn-primary float-end" href="{{ route('projects.index')}}">Back</a>
                </h2>
            </div>

            <div class="card-body">
                    <div class="pull-right">
                    <form action="/dashboard/projects/{{ $project->slug }}" method="POST" enctype="multipart/form-data" class="mb-5">
                    
                        @method ('put')
                        @csrf
                        <div class="mb-3">
                            <label class="font-weight-bold">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" required value="{{ old('title', $project->title ) }}">
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label class="font-weight-bold">Slug</label>
                            <input type="text" class="form-control  @error('slug') is-invalid @enderror" name="slug" id="slug"value="{{ old('slug' , $project->slug) }}" >             
                            @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                        </div>

                        <div class="mb-3">
                          <label for="major" class="form-label">Major</label>
                            <select class="form-control" name="major_id">
                            @foreach ( $Majors as $major)
                                    @if (old('major_id', $project->major_id) == $major->id)
                                        <option value="{{ $major->id }}" selected>{{ $major->name }}</option>
                                     @else
                                         <option value="{{ $major->id }}">{{ $major->name }}</option>
                                    @endif
                                @endforeach        
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Image</label>
                            <input type="hidden" name="oldImage" value="{{ $major->image }}">
                            @if($major->image )
                                <img src="{{ asset('storage/' . $major->image )}}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                            @else
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                            @endif
                            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="body" class="form-label  @error('body') is-invalid @enderror">Body</label>
                                @error('body')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input id="body" type="hidden" name="body" value="{{ old('body',$project->body ) }}">
                            <trix-editor input="body" class="bg-light"></trix-editor>   
                        </div>
                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>
                    </form> 
                </div>
<script>
const title = document.querySelector('#title');
const slug = document.querySelector('#slug');


title.addEventListener('change', function() {
    fetch('/dashboard/projects/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
});

// script preview image
function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
}

</script>
@endsection
