@extends('layouts.master')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">List User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    

 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title"></h3> -->

                 <a href="{{route('user-add')}}" class="btn btn-success">Add User</a>
                <div class="card-tools">
                  <div>
                    <form method="get" action="{{route('user-search')}}" class="input-group input-group-sm" style="width: 350px;">
                      <input type="text" name="search" class="form-control float-right" placeholder="Search">
                      <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>                      
                    </form>

                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th width="280px">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                     @foreach($user as $users)
                    <tr>
                      <td>{{$users->id}}</td>
                      <td>{{$users->name}}</td>
                     
                      <td>{{$users->email}}</td>
                      
                      <td><a href="{{route('user-edit',$users->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                          <a href="{{route('user-destroy',$users->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                        </a>
                        <a href="{{route('user-view',$users->id)}}" class="btn btn-info"><i class="fa fa-eye"></i> View</a>
                        
                        </td>
                      </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
