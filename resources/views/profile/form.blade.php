@extends('home')

@section('body')

<h2>Update Profile</h2>
<br>

  <form class="" action="{{ url ('/profiles/update' , $users[0]->id) }}" method="POST" enctype="multipart/form-data">

    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    @foreach( $users as $user)
    <div class="form-group row">
      <label for="example-text-input" class="col-sm-1 col-form-label">Username</label>
      <div class="col-sm-6">
        <input class="form-control" type="text" name="name" value="{{ $user->name }}" id="example-text-input">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-sm-1 col-form-label">Fullname</label>
      <div class="col-sm-6">
        <input class="form-control" type="text" name="fullname" value="{{ $user->profile->fullname}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-sm-1 col-form-label">Matric No</label>
      <div class="col-sm-6">
        <input class="form-control" type="text" name="matric_no" value="{{ $user->profile->matric_no }}">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-sm-1 col-form-label">Email</label>
      <div class="col-sm-6">
        <input class="form-control" type="text" name="email" value="{{ $user->email }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="example-text-input" class="col-sm-1 col-form-label">Course</label>
      <div class="col-sm-6">
        <select class="form-control" >
          <option value="" name="course_id" disabled selected>Please Select</option>
            @foreach($courses as $course)
            <option value="{{ $course->id }}">{{ $course->name }}</option>
            @endforeach
        </select>
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 control-label">Gender:</label>
      <div class="col-sm-6">
        <label class="radio-inline">
          <input type="radio" name="gender" id="inlineRadio1" value="Lelaki" @if($user->profile->gender == "Lelaki") checked @endif> Lelaki
        </label>
        <label class="radio-inline">
          <input type="radio" name="gender" id="inlineRadio2" value="Perempuan" @if($user->profile->gender == "Perempuan") checked @endif> Perempuan
        </label>
      </div>
    </div>

    <div class="form-group row">
      <label for="example-text-input" class="col-sm-1 col-form-label">SIG</label>
      <div class="col-sm-6">
        <input class="form-control" type="text" value="{{ $user->club->name }}" id="example-text-input" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-sm-1 col-form-label">Year</label>
      <div class="col-sm-6">
        <input class="form-control" type="text" name="year" value="{{ $user->profile->year }}">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-sm-1 col-form-label">No Tel</label>
      <div class="col-sm-6">
        <input class="form-control" type="text" name="no_tel" value="{{ $user->profile->no_tel }}">
      </div>
    </div>
    <br>
    <div class="form-group row">
      <div class="col-sm-2">
        <button class="btn btn-primary" type="submit">Submit</button>
      </div>
    </div>
    @endforeach
  </form>



@endsection
