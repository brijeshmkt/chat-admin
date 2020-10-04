@extends('layouts.master')

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List Chats</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">List Chats</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
  <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-md-3 my-active-users">

        </div>

        <!-- /.col -->
        <div class="col-md-9">
          <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">Chat</h3>

               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    
                    
                    
                  </div>
                  <!-- /.direct-chat-msg -->

                  
                  


                </div>
                <!--/.direct-chat-messages-->

                
              </div>
              
            </div>
            <!--/.direct-chat -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


<script>

  $.get("/active_visitors", function(data, status){
    
      $( ".my-active-users" ).html(data);
    });

  setInterval(function(){ 
    $.get("/active_visitors", function(data, status){
    
      $( ".my-active-users" ).html(data);
    });
  }, 3000);
  
</script>

@endsection

