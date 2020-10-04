@extends('layouts.master')

@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Widget</h1>
      </div>
      
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Embed Chat code</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <textarea class="form-control" style="min-width: 100%; min-height: 200px">
            <script>
                var storeOwnerEmail = '{{ Auth::user()->email }}';
                var storeOwnerId = {{ Auth::user()->id }}; 
            </script>
            <script src="http://127.0.0.1:8000/js/hemstad.js"  async defer></script>
          </textarea>
          
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Copy the above code in the footer of your website before body ending tag.
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->



@endsection