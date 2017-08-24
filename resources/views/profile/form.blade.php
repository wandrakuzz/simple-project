@extends('home')

@section('body')

<h2>Update Profile</h2>
<br>

  <form class="" action="{{ url ('/profile/update' , $users[0]->id) }}" method="POST" enctype="multipart/form-data">

    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    @foreach( $users as $user)
    <div class="form-group row">
      <label for="example-text-input" class="col-sm-1 col-form-label">Username</label>
      <div class="col-sm-6">
        <input class="form-control" type="text" value="{{ $user->name }}" id="example-text-input" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-sm-1 col-form-label">Fullname</label>
      <div class="col-sm-6">
        <input class="form-control" type="text" name="fullname" id="example-text-input">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-sm-1 col-form-label">Matric No</label>
      <div class="col-sm-6">
        <input class="form-control" type="text" name="matric_no" id="example-text-input">
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
        <select class="form-control" name="course_id">
          <option value="" disabled selected>Please Select</option>
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
          <input type="radio" name="gender" id="inlineRadio1" value="Lelaki"> Lelaki
        </label>
        <label class="radio-inline">
          <input type="radio" name="gender" id="inlineRadio2" value="Perempuan"> Perempuan
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
        <input class="form-control" type="text" name="year" id="example-text-input">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-sm-1 col-form-label">No Tel</label>
      <div class="col-sm-6">
        <input class="form-control" type="text" name="no_tel" id="example-text-input">
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
