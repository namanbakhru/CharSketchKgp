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
	<div id="navdiv"><button onclick="viewintro();" id="introbu">What's this</button><button onclick="redirectfn();" id="redirectbu">Find a Sketch</button><a href="https://medium.com/@namanbakhru/a-struggle-that-taught-me-the-importance-of-life-30b743af275c"><button id="storybu">Website Story</button></a><button id="charitybu" onclick="viewcharity();">Donate for Charity</button></div>
	<div id="entrydiv">
		Surprise people by writing their sketch
		<form action="writesketch.php" method="post">
			<select id="access_type" name="access" onchange="changevis();" required="required">
				<option value="">--Access Type--</option>
				<option value="private">Private</option>
				<option value="public">Public</option>
			</select>
			<input type="text" name="share_token" placeholder="Share Token" id="shtoken"><br/>
			<input type="text" name="first_name" placeholder="Your First Name" required="required" id="fname" onchange="remsp('fname');">
			<input type="text" name="last_name" placeholder="Your Last Name" required="required" id="lname" onchange="remsp('lname');"><br/>
			<input type="text" name="pfirst_name" placeholder="Person's First Name" required="required" id="pfname" onchange="remsp('pfname');">
			<input type="text" name="plast_name" placeholder="Person's Last Name" required="required" id="plname" onchange="remsp('plname');"><br/><br/>
			<button id="writeButton">Start Writing</button>
		</form>
	</div>
	<div id="introdiv">
		A character sketch is simply your description/opinion about somebody else. For now, you need not be that formal and you may begin with writing a few messages, describing a few moments or anything you like. A single link will be generated for each character sketch. Follow some ethics and do not try to offend anyone as the reciever has the freedom to delete public sketches. A share token or phrase is required to allow access to private sketches.<br/><br/>Remember that a character sketch is not meant to be taken too personally though can provide insights about you. This is a concept similar to charity plays and nukkads (thinking of a mechanism to conduct them online). We are planning to come up with an option to StoryShop characters into a single story with your support.<br/><br/>
		<button onclick="hideintro();" class="closebu">Close</button>
	</div>
	<div id="charitydiv">
		Thanks for your interest. The site promises to keep working to help raise funds for charity. Try making small donations for every character sketch which is recieved and loved by you.<br/><br/>For now the purpose is to donate the for the crisis of today's time. Try contacting <a href="cast.html">the cast</a> of website story for the time being as donate portal is yet to be implemented.<br/><br/>
		<button onclick="hidecharity();" class="closebu">Close</button>
	</div>
<script type="text/javascript">
	function changevis(){
		var acc = document.getElementById("access_type").value;
		if(acc=='private'){
			document.getElementById("shtoken").style.visibility = 'visible';
			alert("You cannot share private sketches now. This is yet to be implemented for security and convinience. Don't worry, get ready with your sketches as this service would be ready by 1st April. For now, you may write public sketches.")
			document.getElementById("writeButton").style.display = "none";
		}
		else{
			document.getElementById("shtoken").style.visibility = 'hidden';
			document.getElementById("writeButton").style.display = "block";
		}
	}
	function viewintro(){
		document.getElementById("introdiv").style.display = 'block';
	}
	function viewcharity(){
		document.getElementById("charitydiv").style.display = 'block';
	}
	function hideintro(){
		document.getElementById("introdiv").style.display = 'none';
	}
	function hidecharity(){
		document.getElementById("charitydiv").style.display = 'none';
	}
	function redirectfn(){
		window.location.href = "sketch_pages/";
	}
	function remsp(idname){
		var inpname = document.getElementById(idname).value;
		inpname = inpname.trim().split(' ').join('');
		document.getElementById(idname).value = inpname;
	}
</script>
</body>
</html>