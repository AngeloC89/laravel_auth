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
        </tr>
      </thead>

      <tbody>
        @foreach ($portfolios as $portfolio)
          <tr>
            <th scope="row"><a href="">{{$portfolio->title}}</a></th>
            <td>{{$portfolio->content}}</td>
            <td>{{$portfolio->status}}</td>
            <td><a href="" class="btn btn-primary">Show</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
