@extends('home')

@section('body')

  <h1>Suggestion Form</h1>

      <form class="" action="{{ url('/project/create/submit') }}" method="POST">

        {{ csrf_field() }}

        <div class="form-group">
          <label  for="formGroupExampleInput">Programme Name :</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="programname">
        </div>
        <div class="form-group">
          <label  for="formGroupExampleInput">Programme Summary :</label>
            <textarea type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="programsummary"></textarea>
        </div>
        <div class="form-group">
          <label class="col-sm-2" for="formGroupExampleInput">Programme Date</label>
          <div class="col-sm-4">
            <input type="date" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="programdate">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2" for="formGroupExampleInput">Programme Time</label>
          <div class="col-sm-4">
            <input type="time" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="programtime">
          </div><br><br>
        </div>
        <div class="form-group" >
            <button type="submit" name="button" class="btn btn-success pull-right">Submit</button>
        </div>
      </form>
      <br><br>

      <!-- Suggestion Table -->
      <h1>Suggestion List</h1>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Request by</th>
            <th>Programme Name</th>
            <th>Programme Date</th>
            <th>Programme Time</th>
            <th>Request Update</th>
            <th>Delete Suggestion</th>
          </tr>
        </thead>
        <tbody>
          @foreach( $lists as $list)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $list->user->name }}</td>
            <td>{{ $list->title }}</td>
            <td>{{ $list->date }}</td>
            <td>{{ $list->time }}</td>
            <td>{{ $list->created_at->diffForHumans() }}</td>
            <td><form class="" action="{{ url('/project/suggest/delete',$list->id)}}" method="POST">
              <input type="hidden" name="_method" value="delete">
              {!! csrf_field() !!}
                <button class="btn btn-danger" type="submit" name="button">Delete</button>
            </form></td>
          </tr>
          @endforeach
        </tbody>
      </table>


@endsection
