@extends('home')

@section('body')

<h1>Programme List Status</h1>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Request by</th>
      <th>Programme Name</th>
      <th>Request Status</th>
      <th>SIG</th>
      <th>Request Update</th>
    </tr>
  </thead>
  <tbody>
    @foreach( $lists as $list)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $list->user->name }}</td>
      <td>{{ $list->title }}</td>
      <td>{{ $list->status }}</td>
      <td>{{ $list->user->club->name}}</td>
      <td>{{ $list->created_at->diffForHumans() }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
