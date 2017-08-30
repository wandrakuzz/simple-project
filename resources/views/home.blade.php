@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-2">
        <ul class="nav nav-pills nav-stacked">
          <li role="presentation" class="{{ request()->is('home') ? 'active' :'haha' }}"><a href="{{ url('home')}}">Dashboard</a></li>
          <li role="presentation" class="{{ request()->is('project/suggest') ? 'active' :'haha' }}"><a href="{{ url('/project/suggest') }}">Project</a></li>
        </ul>
      </div>
      <div class="col-md-10">
          @yield('body')
      </div>

    </div>
</div>
@endsection
