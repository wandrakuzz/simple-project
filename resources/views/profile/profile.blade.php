@extends('home')

@section('body')
<div class="row">

<div class="panel panel-info">
<div class="panel-heading">
  <h2 class="panel-title">Maklumat Diri</h2>

</div>
<div class="panel-body">
  <div class="row">
    <div class="col-md-3 col-lg-3 " align="center">
      <img class="image-placeholder img-circle-profile" src="/profile/avatar/{{ $users[0]->avatar }}" style="width: 200px; height: 200px; margin-top:20px;"/>
      <form enctype="multipart/form-data" action="/profiles/avatar" method="POST">

        {{ csrf_field() }}

                  <label>Update Profile Image</label>
                  <input type="file" name="avatar"><br>
                  <input type="submit" class="centered btn btn-sm btn-primary">
      </form>
    </div>


    <div class=" col-md-9 col-lg-9 ">
      <table class="table table-user-information">
        <tbody>
          @foreach( $users as $user)
          <tr>
            <td>Nama :</td>
            <td>{{ $user->name }}</td>
          </tr>
          <tr>
            <td>Nama Penuh :</td>
            <td>{{ $user->profile->fullname }}</td>
          </tr>
          <tr>
            <td>Matrik No:</td>
            <td>{{ $user->profile->matric_no }}</td>
          </tr>
          <tr>
            <td>Jantina</td>
            <td>{{ $user->profile->gender }}</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>{{ $user->email }}</td>
          </tr>
          <tr>

            <td>Kursus</td>
            <td>{{ $courses[0]->name }}</td>

          </tr>
          <tr>
            <td>Tahun:</td>
            <td>{{ $user->profile->year }}</td>
          </tr>
          <tr>
            <td>Special Interest Group (SIG)</td>
            <td>{{ $user->club->name }}</td>
          </tr>
          <tr>
            <td>No Telefon</td>
            <td>{{ $user->profile->no_tel }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <a href="{{ url('/profiles/form') }}" class="btn btn-success pull-right">Kemaskini Maklumat Diri</a>

    </div>
  </div>
</div>
      </tbody>
  </table>
</div>
</div>


@endsection
