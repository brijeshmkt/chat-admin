@extends('layouts.master')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('users')}}">Users</a></li>
              <li class="breadcrumb-item active">Add User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form method="POST" action="{{route('user-store')}}" role="form">

                @csrf
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>

                    <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Enter Name">
                     @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif

                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>

                    <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Enter Email">
                     @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <input type="text" name="password" value="{{old('password')}}" class="form-control" placeholder="Enter Password">
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif

                  </div>
                  
                  
                  
                </div>
              </div>

              
                  </div>
                

                 
                </div>
                
                 
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
