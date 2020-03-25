<?php
	if(isset($_POST["filename"]))
		$filename = $_POST["filename"];
	$myFile = "sketch_pages/".$filename;
	unlink($myFile) or die("Couldn't delete file")
?>
<!DOCTYPE html>
<html>
<head>
<!--<link rel="shortcut icon" type="image/x-icon" href="">-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Char Sketch</title>
<link rel="stylesheet" type="text/css" media="screen and (orientation:portrait)" href="css/del_portrait.css">
<link rel="stylesheet" type="text/css" media="screen and (orientation:landscape)" href="css/del_landscape.css">
</head>
<body>
	<a href="." id="returnbu"><img src="images/returnbutton.jpg"></a>
	<button id="returnbu2"><a href=".">Return</a></button>
</body>
</html>