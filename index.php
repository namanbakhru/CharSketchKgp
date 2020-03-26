<?php
	session_start();
	session_unset();
	session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Char Sketch</title>
<link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="screen and (orientation:portrait)" href="css/index_portrait.css">
<link rel="stylesheet" type="text/css" media="screen and (orientation:landscape)" href="css/index_landscape.css">
</head>
<body>
	<div><button onclick="viewintro();" id="introbu">What's this</button><button onclick="redirectfn();" id="redirectbu">Find a Sketch</button></div>
	<div id="entrydiv">
		Surprise people by writing their sketch
		<form action="writesketch.php" method="post">
			<select id="access_type" name="access" onchange="changevis();" required="required">
				<option value="">--Access Type--</option>
				<option value="private">Private</option>
				<option value="public">Public</option>
			</select>
			<input type="text" name="share_token" placeholder="Share Token" id="shtoken"><br/>
			<input type="text" name="first_name" placeholder="Your First Name" required="required" id="fname">
			<input type="text" name="last_name" placeholder="Your Last Name" required="required" id="lname"><br/>
			<input type="text" name="pfirst_name" placeholder="Person's First Name" required="required" id="pfname">
			<input type="text" name="plast_name" placeholder="Person's Last Name" required="required" id="plname"><br/><br/>
			<button id="writeButton">Start Writing</button>
		</form>
	</div>
	<div id="introdiv">
		A character sketch is simply your description/opinion about somebody else. For now, you need not be that formal and you may begin with writing a few messages, describing a few moments or anything you like. A single link will be generated for each character sketch. Follow some ethics and do not try to offend anyone as the reciever has the freedom to delete public sketches. A share token or phrase is required to allow access to private sketches.<br/><br/>Remember that a character sketch is not meant to be taken too personally though can provide insights about you.<br/><br/>
		<button onclick="hideintro();" id="closebu">Close</button>
	</div>
<script type="text/javascript">
	function changevis(){
		var acc = document.getElementById("access_type").value;
		if(acc=='private'){
			document.getElementById("shtoken").style.visibility = 'visible';
			alert("You cannot share private sketches now. This is yet to be implemented for security and convinience. Don't worry, get ready with your sketches as this service would be ready within a week. For now, you may write public sketches.")
		}
		else
			document.getElementById("shtoken").style.visibility = 'hidden';
	}
	function viewintro(){
		document.getElementById("introdiv").style.display = 'block';
	}
	function hideintro(){
		document.getElementById("introdiv").style.display = 'none';
	}
	function redirectfn(){
		alert("This functionality is yet to be implemented. For now you will be directed to the directory of public sketches");
		window.location.href = "sketch_pages/";
	}
</script>
</body>
</html>