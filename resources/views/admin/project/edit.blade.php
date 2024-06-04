@extends('layouts.admin')
@section('content')



<section class="container p-5">

    <form action="{{ route('admin.project.update', $project->slug) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label @error('title') is-invalid @enderror">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{ old('title', $project->title) }}" required >
        
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea type="text" class="form-control @error('content') is-invalid @enderror" id="description" name="content" placeholder="Descrizone" value="{{old('content', $project->content)}}" required>{{ old('content', $project->content) }}"></textarea>  
        </div>
      
        
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image" placeholder="Immagine" value="{{ old('image', $project->image) }}" >
   
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <button class="btn btn-primary" type="submit">Modifica</button>
    </form>
</section>
@endsection