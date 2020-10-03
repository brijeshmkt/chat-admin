
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Live Chate</title>
	<link rel="stylesheet" href="">
		<script
		  src="https://code.jquery.com/jquery-3.5.1.js"
		  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
		  crossorigin="anonymous"></script>
	<style>
		.chat-wrrap{
			height: 800px;
			width: 100%;
		}
		.chat-header {
			background: -webkit-linear-gradient(-180deg, #005f32, #53b04b);
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
			padding: 8px 15px;
			color: white;
			font-weight: bold;
			margin-bottom: 10px;
			display: flex;
			align-items: center;
			justify-content: space-between;
		}
		.chat{
			border:1px solid #469f32;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
		}
		.label-chat {
			margin-left: 10%;
			color: #469f32;
		}
		.input-txt {
			border:1px solid #469f32;
			padding: 5px;
			border-radius: 5px;
			margin-top: 10px;
			width: 80%;
			margin-left: 10%;
			height: 40px;
			font-size: 18px;
		}
		.chat-btn{
			border:1px solid #469f32;
			padding: 5px;
			border-radius: 5px;
			margin-top: 20px;
			width: 80%;
			margin-left: 10%;
			height: 40px;
			background: -webkit-linear-gradient(-180deg, #005f32, #53b04b);
    		color: #ffffff;
    		font-size: 18px;
		}
		#visitor-name-box {
			padding-bottom: 20px;
		}
		.chat-close {

		}
		.chat-grid{
			display: flex;
			align-items: center;
			justify-content: space-between;
		}
		.chat-sms-box{
			padding: 5px;
		}
		.chat-btn-send{
			width: 15%;
			height: 40px;
			background:#469f32;
			border:none;
			color: white;
			font-weight: bold;

		}
		.chat-type{
			width: 85%;
			height: 40px;
			border:1px solid #469f32;
		}
		.chat-sms{

		}
		.col-right {
			text-align: right;
		}
	</style>
</head>
<body>
	<div class="chat-wrrap">
		<div class="chat">
			<div class="chat-header">
				<label  for="">Chat With US</label>
				<p id="bm-close" class="chat-close">X</p>
			</div>
			<div id="visitor-name-box">
				<label class="label-chat" for="">Enter Your Name:</label><br>
				<input class="input-txt" type="text" id="visitor-name-input"><br>
				<button class="chat-btn" id="bm-submit-visitor-name">Start Chat</button>
			</div>
			<div class="chat-sms-box">
				<div id="chat-box">
					<label class="col-left"><p>Hello</p></label>
					<label class="col-right"><p>How Are You</p></label>
					
				</div>

				<div class="chat-grid">
					<input type="text" class="chat-type" id="bm-input-msg" name="" value="">
					<button id="bm-submit" class="chat-btn-send" type="submit">Send</button>
				</div>
			</div>
		</div>
	</div>
</body>


<script>



var params = location.href.split('?')[1].split('&');
storeDetails = {};
for (x in params)
 {
storeDetails[params[x].split('=')[0]] = params[x].split('=')[1];
 }

 

 

(function($, storeDetails){


	const url = 'http://127.0.0.1:8000/'
	const uniqueId = Math.floor(Math.random()*8999999999999999 + 100000000000000000);
	
	var visitorName = '';
	var visitor_id = null;
	var start_load = false;
	var ipdata = null;
	var time = 3000;
	var refreshIntervalId = null;




	// init functions
	getIPData();






		
	// console.log(storeOwnerEmail);

	document.getElementById('bm-submit').addEventListener("click", readMsg);

	document.getElementById('bm-submit-visitor-name').addEventListener("click", getVisitorName)

	document.getElementById('bm-close').addEventListener("click", closeVisitor)

	
	function closeVisitor() {
		console.log('close');
    	$.get( url + "update-status/" + visitor_id, function(data, status){
    		console.log(data);
    	});

    	clearInterval(refreshIntervalId);
    	
	}

	
	function readMsg() {
		msgTxt = document.getElementById('bm-input-msg').value;
		
		
		data = {
          visitor_id : visitor_id,
          msg: msgTxt,
          owner: 0,
          user_id: storeDetails.storeOwnerId,
          
        }
        console.log(data);

		



		$.ajax({
		  type: "GET",
		  url: url + 'message',
		  data: data,
		  success: function(result) {
            
            // console.log(result);

  

            },
            error: function(result) {
                // alert('msg');
            }
		  
		});



	}

	function getIPData () {
		$.getJSON('https://ipapi.co/json/', function(data) {
			ipdata = data;
  			
		});
		
		
	}


	function getVisitorName() {

		visitorName = document.getElementById('visitor-name-input').value;
		// console.log('visitors name is ' + visitorName);
		document.getElementById('visitor-name-box').style.display = 'none';



		visitorData = {
			user_id: storeDetails.storeOwnerId,
			name: visitorName,
			status: 1,
			uniqueId: uniqueId,
			ipdata: ipdata,
		}

		// console.log(visitorData);
		

		$.ajax({
		  type: "GET",
		  url: url + 'addVisitor',
		  data: visitorData,
		  success: function(result) {
            
            // console.log(result);
            visitor_id = result.id;
            start_load = true;
            console.log(visitor_id);
            loadMsg();
            },
            error: function(result) {
                // alert('msg');
            }
		  
		});

	}


	function checkStoreOwnerStatus() {
		// if live show popup
	}


	function loadMsg() {
		 refreshIntervalId = setInterval(function(){ 
			msgurl = url + "messages/" + visitor_id;
			console.log(msgurl);
		    	$.get( msgurl, function(data, status){

			      $( "#chat-box" ).html(data);
			      console.log(data);
			      console.log('fire');
			    });
		  }, time);
	}


	


	
	
	


})(jQuery, storeDetails);



</script>





</html>