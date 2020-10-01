@extends('layouts.master')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

            <h1>View User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('users')}}">Users</a></li>
              <li class="breadcrumb-item active">View User</li>

            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">



            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">

                <h3 class="card-title">View User</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong>User Name</strong>

                <p class="text-muted">
                  {{$user->name}}
                </p>

                <hr>

                <strong> Email</strong>

                <p class="text-muted">{{$user->email}}</p>

                <hr>
                


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

@endsection
