<?php
	session_start();
	if(isset($_POST["sketchtitle"]))
		$_SESSION["sketchtitle"] = $_POST["sketchtitle"];
	if(isset($_POST["writeskch"]))
		$_SESSION["writeskch"] = $_POST["writeskch"];
	$filename = $_SESSION["pfirst_name"]."_".$_SESSION["plast_name"]."_by_".$_SESSION["first_name"]."_".$_SESSION["last_name"];
	file_put_contents("../sketch_files/".$filename.".txt", $_SESSION["writeskch"]);
	$filename2 = "sketch_pages/".$filename.".php";
	$sketchtitle = "";
	if(isset($_SESSION["sketchtitle"]) && $_SESSION["access"]=="public") 
		$sketchtitle = $_SESSION["sketchtitle"];
	$writeskch = "";
	if(isset($_SESSION["writeskch"]) && $_SESSION["access"]=="public") 
		$writeskch = $_SESSION["writeskch"];
	$filecontent = "<!DOCTYPE html>\n<html>\n<head>\n<!--<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"\">-->\n<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n<title>Char Sketch</title>\n<link rel=\"stylesheet\" type=\"text/css\" media=\"screen and (orientation:portrait)\" href=\"css/common_skch_portrait.css\">\n<link rel=\"stylesheet\" type=\"text/css\" media=\"screen and (orientation:landscape)\" href=\"css/common_skch_landscape.css\">\n</head>\n<body>\n<h2 id=\"skchtitle\">".$sketchtitle."</h2>\n<div id=\"skch\">".$writeskch."</div>\n<script type=\"text/javascript\">\nvar flag =;\nvar filename =;\nvar sharetoken =;\n</script>\n</body>\n</html>";
	file_put_contents($filename2, $filecontent);
?>
<!DOCTYPE html>
<html>
<head>
<!--<link rel="shortcut icon" type="image/x-icon" href="">-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Char Sketch</title>
<link rel="stylesheet" type="text/css" media="screen and (orientation:portrait)" href="css/view_portrait.css">
<link rel="stylesheet" type="text/css" media="screen and (orientation:landscape)" href="css/view_landscape.css">
</head>
<body>
	<div><a href="<?php echo($filename2)?>">Here is the link to the page.</a>
	<?php 
		if(isset($_SESSION["share_token"]))
			echo("</br>Your Share Token: ".$_SESSION["share_token"]); 
	?></div>
	<h2 id="skchtitle"></h2>
	<pre><textarea id="writespace" name="writeskch" placeholder="Write your sketch here. Remember to save your sketches periodically in case of lengthy sketches" required><?php echo($_SESSION["writeskch"]); echo($_SESSION); ?></textarea></pre></br>
	<button onclick="window.print()">Print</button>
<script type="text/javascript">
	document.getElementById("skchtitle").innerHTML = "<?php echo($_SESSION["sketchtitle"]); ?>";
</script>
</body>
</html>