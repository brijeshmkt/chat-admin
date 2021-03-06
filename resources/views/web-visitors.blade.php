@extends('layouts.master')

@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Chat History</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Blank Page</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        
        
        <div class="card-body">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Chats</h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->

              
        


              <div class="card-body p-0 table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>IP</th>
                      <th>City</th>
                      <th>Country</th>
                      
                      <th>Region</th>
                      <th>Time Zone</th>
                      <th>Date</th>
                      <th>Page</th>

                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($visitors as $visitor)
                    <tr>
                      <td>{{ $visitor->uniqueId }}</td>
                      <td>{{ $visitor->ip }}</td>
                      <td>{{ $visitor->city }}</td>
                      <td>{{ $visitor->country_name }}</td>
                      
                      <td>{{ $visitor->region }}</td>
                      <td>{{ $visitor->timezone }}</td>

                      <td>11-12-2020</td>
                      <td>{{ $visitor->page }}</td>
                      <td>View </td>
                    </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
        <!-- /.card-body -->
        
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->



@endsection