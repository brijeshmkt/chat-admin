
  <!-- Main content -->
 
        
          <div class="recent-here">
              <div class="middle-chat-user">
                @foreach ($visitors as $visitor)
                  <a href="/chat_messages/{{$visitor->id}}" title="">
                  <div class="card">
                    <div class="d-flex p-3 bg-secondary text-white">
                     
                      <div class="card-body pull-left">
                      <h5 class="card-title">{{$visitor->name}}</h5>
                      <p class="card-text">{{$visitor->id}}</p>
                      
                      </div>
                    </div>
                  </div>
                   </a>
                  @endforeach
               
                </div>
              </div>
       

