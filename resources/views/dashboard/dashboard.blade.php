@extends('home')

@section('body')

<div class="row" >
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading dark-blue">
                                    <i class="fa fa-users fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded">
                                    SIG Members
                                </div>
                                <div class="circle-tile-number text-faded">
                                    {{ $users}}
                                    <span id="sparklineA"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading blue">
                                    <i class="fa fa-tasks fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content blue">
                                <div class="circle-tile-description text-faded">
                                    SIG Program
                                </div>
                                <div class="circle-tile-number text-faded">
                                    {{ $suggests }}
                                    <span id="sparklineB"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading green">
                                    <i class="fa fa-tasks fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content green">
                                <div class="circle-tile-description text-faded">
                                    Accepted
                                </div>
                                <div class="circle-tile-number text-faded">
                                    {{ $accepts }}
                                    <span id="sparklineB"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading orange">
                                    <i class="fa fa-tasks fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content orange">
                                <div class="circle-tile-description text-faded">
                                    Pending
                                </div>
                                <div class="circle-tile-number text-faded">
                                    {{ $pendings }}
                                    <span id="sparklineB"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading red">
                                    <i class="fa fa-tasks fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content red">
                                <div class="circle-tile-description text-faded">
                                    Rejected
                                </div>
                                <div class="circle-tile-number text-faded">
                                    {{ $rejects }}
                                    <span id="sparklineB"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
  </div>

<h1>FTSM Programme List Status</h1>

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
      <td>
        <span
          class="label @if($list->status=='Accepted') label-success
          @elseif ($list->status=='Rejected') label-danger
          @else label-warning">
          @if($list->status=='Accepted') Accepted
          @elseif ($list->status=='Rejected') Rejected
          @else Pending
        </span>
      </td>
      <td>{{ $list->user->club->name}}</td>
      <td>{{ $list->created_at->diffForHumans() }}</td>
    </tr>

    <!-- @empty

    <tr>
      <td colspan="8">No data available</td>
    </tr> -->

    @endforeach
  </tbody>
</table>

@endsection
