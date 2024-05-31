@extends('layouts.admin')
@section('content')


<
<section class="container p-5">

    <form action="{{ route('admin.project.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label @error('title') is-invalid @enderror">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{ $project->title }}" >
        
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <input type="text" class="form-control @error('content') is-invalid @enderror" id="description" name="content" placeholder="Descrizone" value="{{$project->content }}">  
        </div>
      
        
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" placeholder="Serie" value="{{ $project->status }}" >
   
            @error('status')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <button class="btn btn-primary" type="submit">Modifica</button>
    </form>
</section>
@endsection