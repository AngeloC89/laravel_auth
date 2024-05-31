@extends('layouts.admin')
@section('content')


@section('content')
<div id="tableIndex">
  <div class="d-flex justify-content-between align-items-center p-4 container">
    <h2>Table of projects</h2>
    <a class="btn btn-primary" href="{{route('admin.project.create')}}">Aggiungi</a>
  </div>

  <div class="container p-2">
    <div class="container">
      <table class="table table-success table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Status</th>
            <th scope="col">Create Date</th>
            <th scope="col">Update Date</th>
            <th scope="col">Actions</th>

          </tr>
        </thead>

        <tbody class="table-group-divider">
          @foreach ($projects as $project)
        <tr>
        <th scope="row">{{$project->id}}</th>
        <td>{{$project->title}}</td>
        <td>{{$project->status}}</td>
        <td>{{$project->created_at}}</td>
        <td>{{$project->updated_at}}</td>
        <td>
          <div class="d-flex gap-2 p-4"> <a href="{{ route('admin.project.show', $project->id) }}"
            class="btn btn-primary"> <i class="fa-solid fa-eye"></i></a>

          <a href="{{ route('admin.project.edit', $project->id) }}" class="btn btn-warning"> <i
            class="fa-solid fa-pen-to-square"></i></a>

          <form action="{{ route('admin.project.destroy', $project->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button  type="submit" value="&#10060 " class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            
          </form>

        </td>
        </tr>
      @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection