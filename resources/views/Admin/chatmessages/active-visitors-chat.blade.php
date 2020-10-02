@extends('layouts.master')

@section('content')
<style type="text/css">
  .middle-chat-user, .single-chatting{
      height: 380px;
    overflow-y: scroll;
}

  
</style>
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

        <div class="col-md-3" id="active-users">

        </div>

        <!-- /.col -->
        <div class="col-md-9">
          <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">Active Chat</h3>

               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg" id="msg-box">
                    
                   
                    
                    
                      
                    
                  </div>
                  

                  
                  


                </div>
                <!--/.direct-chat-messages-->

                
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <form action="#" method="post">
                  <div class="input-group">
                    <input id="admin-input-msg" type="text" name="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append">
                      <button id="admin-send-msg-btn" type="button" class="btn btn-primary">Send</button>
                    </span>
                  </div>
                </form>
              </div>
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


<script>


  $('#admin-send-msg-btn').on('click', function(){

    var adminMsg = $('#admin-input-msg').val();

    if(adminMsg) {
      console.log(adminMsg)

      data = {
          visitor_id : {!! $id !!},
          msg: adminMsg,
          owner: 1
        }

      
      console.log(data);  

      $.ajax({
          type: "GET",
          url: '/message',
          data: data,
          success: function(result) {
                  
                  console.log(result);
                  $('#admin-input-msg').val('');
                   
                },
                error: function(result) {
                    // alert('msg');
                }
          
        });
      

    }else {
      console.log('blank value')
    }
  })


  $.get("/active_visitors", function(data, status){
    
      $( "#active-users" ).html(data);
    });


  $.get("/messages/{!! $id !!}", function(data, status){
    
      $( "#msg-box" ).html(data);
    });

  setInterval(function(){ 
    $.get("/messages/{!! $id !!}", function(data, status){
    
      $( "#msg-box" ).html(data);
    });
  }, 3000);
  
</script>

@endsection

