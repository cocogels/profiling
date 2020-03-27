@extends('layouts.main')





@section('title', 'Users')

@section('extra-link')

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
          <i class="fa fa-angle-double-right fa-fw"></i> &nbsp;&nbsp; <i class="fa fa-folder-open fa-fw"></i> Lists </font>
      </h5>
  </div>
</div>

@endsection

@section('content')
<div class="ml-xl-5 mr-xl-5">
  @if( $message = Session::get('success_message'))
  <div class="card">
    <div class="card-body alert alert-dismissible bg-teal color-palette">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h3><i class="icon fas fa-check"></i>
                {{ $message }}
              </h3>
    </div>    
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

            <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="tooltip" data-placement="left" title="Add New User" href="{{ route('view.users.create') }}" role="tab" aria-controls="vert-tabs-add" aria-selected="false"><i class="far fa-plus-square"></i>&nbsp; Add </a>

           <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="tooltip" data-placement="left" title="Trashed" href="#" role="tab" aria-controls="vert-tabs-add" aria-selected="false"><i class="fas fa-trash-restore-alt"></i>&nbsp; Trash </a>

          </div>
        </div>
        <div class="col-7 col-sm-9">
          <div class="card ml-xl-5">
            <div class="card-header">
              <h3 class="card-title text-center">
                <i class="fas fa-info-circle"></i>
                    &nbsp;  Users
                </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
              <table id="table_users_lists" class="table table-bordered table-striped table-hover" cellspacing="0">
                <thead>
                  <tr style="font-size: 12px; text-transform: uppercase;">
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection


@section('extra-script')


<script type="text/javascript">
    $(document).ready( function( e ){
      e.preventDefault;

      $('#table_users_lists').DataTable({
          "processing": true,
          "serverSide": true,
          "searching": true,
          "ordering": true,
          "autoWidth": false,
          "language": {
            "processing": '<i class="fas fa-3x fa-spin fa-sync-alt"></i><span>&nbsp; Loading...</span>'
          },
          "ajax":{
              "type": "POST",
              "url": "{{ route('server.process.data') }}",
              "dataType": "json",
              "data": {"_token": "<?= csrf_token() ?>"}
          },
          "columns": [
              { "data": "email"},
              { "data": "action", 
                "orderable": false,
            },
          ],         
      });
    
    });
</script>
@endsection