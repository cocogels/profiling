@extends('layouts.main')





@section('title', 'Users')


@section('content-header')

<div class="row">
  <div class="col-lg-12" style="margin-top: 10px;">
      <h5 class="page-header" style="color: #09C;font-size: 16px;">
        <i class="fa fa-paste fa-fw"></i>  Table & Maintenance &nbsp;&nbsp;
          <font style="color: #09C;">
          <i class="fa fa-angle-double-right fa-fw"></i> &nbsp;&nbsp; <i class="fa fa-folder fa-fw"></i> Users </font>
          &nbsp;&nbsp;
          <font style="color: #000;">
          <i class="fa fa-angle-double-right fa-fw"></i> &nbsp;&nbsp; <i class="fa fa-folder-open fa-fw"></i> Lists </font>

      </h5>
  </div>
</div>

@endsection

@section('content')
<div class="ml-xl-5 mr-xl-5">
  @if( $message = Session::get('success_message'))
    <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h3><i class="icon fas fa-check"></i>
                {{ $message }}
              </h3>
    </div>
@endif
</div>

<div class="card card-primary card-outline ml-xl-5 mr-xl-5">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-edit"></i>
        User Maintenance
      </h3>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-5 col-sm-2">
          <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true"><i class="fas fa-list"></i>&nbsp; List</a>


            <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="tooltip" data-placement="right" title="Add New User" href="{{ route('view.users.create') }}" role="tab" aria-controls="vert-tabs-add" aria-selected="false"><i class="far fa-plus-square"></i>&nbsp; Add </a>
          </div>
        </div>
        <div class="col-7 col-sm-9">
          <div class="tab-content" id="vert-tabs-tabContent">
            <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">

            </div>
            <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
 
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
