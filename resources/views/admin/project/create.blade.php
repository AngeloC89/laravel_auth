@extends('layouts.admin')
@section('content')

<form class="p-4" action="{{ route('admin.project.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label " >Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}" required> 
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea type="text" class="form-control @error('title') is-invalid @enderror" id="content" name="content" rows="3" >{{old('content')}}</textarea>
            
        </div>
     
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" value="{{old('status')}}" required>
       
            @error('status')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
      
      
        <button class="btn btn-primary" type="submit">Crea</button>
    </form>

@endsection