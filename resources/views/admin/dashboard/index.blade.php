@extends('layouts.main')





@section('title', 'Dashboard')

@section('extra-link')

@endsection

@section('content-header')
   <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $users }}</h3>
                <p>Registered Users</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="{{ route('view.users.index') }}" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
@endsection


@section('content')


@endsection


@section('extra-script')

@endsection