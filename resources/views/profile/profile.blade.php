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
      <img class="image-placeholder img-circle-profile" src="" style="width: 100px; height: 100px"/>
    </div>

    <div class=" col-md-9 col-lg-9 ">
      <table class="table table-user-information">
        <tbody>

          <tr>
            <td>Nama :</td>
            <td>Azwan</td>
          </tr>
          <tr>
            <td>Nama Penuh :</td>
            <td>sa</td>
          </tr>
          <tr>
            <td>Matrik No:</td>
            <td>asd</td>
          </tr>
          <tr>
            <td>Jantina</td>
            <td>asd</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>sds</td>
          </tr>
          <tr>
            <td>Kursus</td>
            <td>asd</td>
          </tr>
          <tr>
            <td>Tahun:</td>
            <td>asd</td>
          </tr>
          <tr>
            <td>Special Interest Group (SIG)</td>
            <td>asd</td>
          </tr>
          <tr>
            <td>No Telefon</td>
            <td>asd</td>
          </tr>

        </tbody>
      </table>

      <a href="{{ url('/profile/form') }}" class="btn btn-success pull-right">Kemaskini Maklumat Diri</a>

    </div>
  </div>
</div>
     <div class="panel-footer">
            <a href="student.html" type="button" class="btn btn-sm btn-danger"><i class="fa fa-times"></i>  Keluar</a>

        </div>

      </tbody>
  </table>
</div>
</div>


@endsection
