@extends('layouts.admin')
@section('content')

<form class="p-4" action="{{ route('admin.project.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label text-white " >Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}" required> 
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label text-white">Descrizione</label>
            <textarea type="text" class="form-control @error('title') is-invalid @enderror" id="description" name="description" rows="3" >{{old('description')}}</textarea>
            
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label text-white">Immagine</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="thumb" name="thumb"  value="{{old('thumb')}}" required>
         
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label text-white">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"  value="{{old('price')}}" required>
           
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label text-white ">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{old('series')}}" required>
       
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label text-white">Data di vendita</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value=" {{old('sale_date')}}" required>
           
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label text-white">Tipo</label>
            <select type="text" name="type" id="type" class="form-control @error('title') is-invalid @enderror" value="     {{old('type')}}">
                <option value="project book">project book</option>
                <option value="graphic book">Graphic book</option>
                <option value="grafic novel">Graphic novel</option>
            </select>
       
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>   
        <button class="btn btn-primary" type="submit">Crea</button>
    </form>

@endsection