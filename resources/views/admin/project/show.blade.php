@extends('layouts.app')
@section('content')

<div id="" class="container">

  <h1 class="text-truncate text-uppercase text-center p-3 ">{{ $project->title }}</h1>
  <!-- <div class="w-100 d-flex justify-content-center">
    <img src="{{ $project->thumb }}" class=" w-50 m-auto" alt="{{ $project->title }}">
  </div> -->

  <div class="fs-3 py-4">{{ $project->content }}</div>

  <div class=" fs-3 py-4">Status: {{ $project->status }}</div>

  <div class="d-flex justify-content-start py-2">
    <button class="btn btn-primary h-25"><a class="text-decoration-none text-white" href="{{route('admin.project.edit', $project->id)}}">Modifica</a></button>

    <form action="{{ route('admin.project.destroy', $project->id) }}" method="POST">
      @csrf
      @method('DELETE')
      <input id="deleteProject" type="submit" value="Elimina" class="btn btn-danger ms-3">
    </form>

  </div>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Stai eliminando {{ $project->title }}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        Sicuro/a di voler eliminare questo elemento?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
          <button type="button" class="btn btn-danger">Elimina</button> </div>
      </div>
    </div>
  </div>


@endsection