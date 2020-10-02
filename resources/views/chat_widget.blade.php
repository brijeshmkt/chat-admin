
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
				<p class="chat-close">X</p>
			</div>
			<div id="visitor-name-box">
				<label class="label-chat" for="">Enter Your Name:</label><br>
				<input class="input-txt" type="text" id="visitor-name-input"><br>
				<button class="chat-btn" id="bm-submit-visitor-name">Send</button>
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
</html>