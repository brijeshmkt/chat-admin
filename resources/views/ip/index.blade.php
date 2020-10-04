@extends('layouts.master')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Blocked IP</h1>
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

              <div class="input-group input-group-sm">
                <form class="form-inline" method="get" action="/add-block-ip">
                  <input name="ip" type="text" class="form-control" placeholder="IP Address" required>
                  <span class="input-group-append">

                    <input type="submit" value="Block" class="btn btn-info btn-flat" />
                  </span>
                </form>
                </div>

            </div>

            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>IP</th>
                      
                    </tr>
                  </thead>
                  <tbody>

                     @foreach($ips as $ip)
                    <tr>
                      <td>{{ $ip->id }}</td>
                      <td>{{ $ip->ip }}</td>
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
