@extends('layouts.main')





@section('title', 'Users | Create')

@section('extra-link')
 <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }} ">

@endsection


@section('content-header')

<div class="row">
  <div class="col-lg-12" style="margin-top: 10px;">
      <h5 class="page-header" style="color: #09C;font-size: 16px;">
        <i class="fa fa-paste fa-fw"></i>  Table & Maintenance &nbsp;&nbsp;
          <font style="color: #09C;">
          <i class="fa fa-angle-double-right fa-fw"></i> &nbsp;&nbsp; <i class="fa fa-folder fa-fw"></i> Users </font>
          &nbsp;&nbsp;
          <font style="color: #000;">
          <i class="fa fa-angle-double-right fa-fw"></i> &nbsp;&nbsp; <i class="fa fa-folder-open fa-fw"></i> Create </font>

      </h5>
  </div>
</div>

@endsection

@section('content')




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
            <a class="nav-link" id="vert-tabs-home-tab" data-toggle="tooltip" title="User Lists" href="{{ route('view.users.index') }}" aria-controls="vert-tabs-list" aria-selected="true"><i class="fas fa-list"></i>&nbsp; List</a>

            <a class="nav-link active"  href="" data-toggle="tooltip" data-placement="right" title="Create new user"><i class="far fa-plus-square"></i>&nbsp; Add</a>
            <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="tooltip" data-placement="left" title="Trashed" href="#" role="tab" aria-controls="vert-tabs-add" aria-selected="false"><i class="fas fa-trash-restore-alt"></i>&nbsp; Trash </a>

          </div>

        </div>
          <div class="col-7 col-sm-9">
              <div class="container">
                <div class="container-fluid">
                       <form method="POST" action="{{ route('users.store') }}">
                      @csrf
                      @include('admin.users.form')
                    </form>
                </div>
              </div>
          </div>
        </div>
      </div>
</div>

@endsection


@section('extra-script')
<script type="text/javascript">
  $(document).ready( function(){

      $(".toggle-password").click( function(){
        
        $(this).toggleClass("fa-eye fa-eye-slash");

        var input = $($(this).attr("toggle"));
        
        if ( input.attr("type") == "password"){

            input.attr("type", "text");

        } else {

          input.attr('type', 'password');

        };

        
      });


       $(".toggle-c-password").click( function(){
        
        $(this).toggleClass("fa-eye fa-eye-slash");

        var input = $($(this).attr("toggle"));
        
        if ( input.attr("type") == "password"){

            input.attr("type", "text");

        } else {

          input.attr('type', 'password');

        };
      });
  });

</script>


<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
@endsection