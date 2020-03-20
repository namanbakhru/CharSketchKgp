<?php
	session_start();
	if(isset($_POST["sketchtitle"]))
		$_SESSION["sketchtitle"] = $_POST["sketchtitle"];
	if(isset($_POST["writeskch"]))
		$_SESSION["writeskch"] = $_POST["writeskch"];
	if(isset($_POST["first_name"]))
		$_SESSION["first_name"] = $_POST["first_name"];
	if(isset($_POST["last_name"]))
		$_SESSION["last_name"] = $_POST["last_name"];
	if(isset($_POST["pfirst_name"]))
		$_SESSION["pfirst_name"] = $_POST["pfirst_name"];
	if(isset($_POST["plast_name"]))
		$_SESSION["plast_name"] = $_POST["plast_name"];
	if(isset($_POST["share_token"]))
		$_SESSION["share_token"] = $_POST["share_token"];
	if(isset($_POST["access"]))
		$_SESSION["access"] = $_POST["access"];
?>

<!DOCTYPE html>
<html>
<head>
<!--<link rel="shortcut icon" type="image/x-icon" href="">-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Char Sketch</title>
<link rel="stylesheet" type="text/css" media="screen and (orientation:portrait)" href="css/write_portrait.css">
<link rel="stylesheet" type="text/css" media="screen and (orientation:landscape)" href="css/write_landscape.css">
</head>
<body>
	<form id="writeform" method="post">
	<input type="text" name="sketchtitle" placeholder="Sketch Title (Optional)" id="skchtitle">
	<pre><textarea id="writespace" name="writeskch" placeholder="Write your sketch here. Remember to save your sketches periodically in case of lengthy sketches" required><?php echo($_SESSION["writeskch"]); ?></textarea></pre></br>
	<button id="savebu" formaction="writesketch.php">Save</button>  <button id="submitbu" formaction="viewsketch.php">Submit</button>
	</form>
<script type="text/javascript">
	document.getElementById("skchtitle").value = "<?php echo($_SESSION["sketchtitle"]); ?>";
</script>
</body>
</html>