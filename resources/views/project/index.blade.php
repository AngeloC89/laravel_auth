@extends('layouts.app')
@section('content')


@section('content')

<div class="content">
  <div class="container">
    <table class="table table-success table-striped">
      <thead>
        <tr>
          <th scope="col">Title</th>
          <th scope="col">Content</th>
          <th scope="col">Status</th>
          <th scope="col">Links</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($projects as $project)
          <tr>
            <th scope="row">{{$project->title}}</th>
            <td>{{$project->content}}</td>
            <td>{{$project->status}}</td>
            <td><a href="{{ route('admin.project.show', $project->id) }}" class="btn btn-primary">Show</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
