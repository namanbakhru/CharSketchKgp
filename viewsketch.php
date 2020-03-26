<?php
	session_start();
	if(isset($_POST["sketchtitle"]))
		$_SESSION["sketchtitle"] = $_POST["sketchtitle"];
	if(isset($_POST["writeskch"]))
		$_SESSION["writeskch"] = $_POST["writeskch"];
	$filename = $_SESSION["pfirst_name"]."_".$_SESSION["plast_name"]."_by_".$_SESSION["first_name"]."_".$_SESSION["last_name"];
	file_put_contents("sketch_files/".$filename.".txt", $_SESSION["writeskch"]);
	$filename2 = "sketch_pages/".$filename.".php";
	$sketchtitle = "";
	if(isset($_SESSION["sketchtitle"]) && $_SESSION["access"]=="public") 
		$sketchtitle = $_SESSION["sketchtitle"];
	$writeskch = "";
	if(isset($_SESSION["writeskch"]) && $_SESSION["access"]=="public") 
		$writeskch = $_SESSION["writeskch"];
	$filecontent = "<!DOCTYPE html>\n<html>\n<head>\n<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"../favicon.png\">\n<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n<title>Char Sketch</title>\n<link rel=\"stylesheet\" type=\"text/css\" media=\"screen and (orientation:portrait)\" href=\"../css/common_skch_portrait.css\">\n<link rel=\"stylesheet\" type=\"text/css\" media=\"screen and (orientation:landscape)\" href=\"../css/common_skch_landscape.css\">\n<link rel=\"stylesheet\" type=\"text/css\" media=\"print\" href=\"../css/common_skch_landscape.css\">\n<link href=\"https://fonts.googleapis.com/css?family=Delius&display=swap\" rel=\"stylesheet\"></head>\n<body>\n<div id=\"navdiv\"><button id=\"writebu\" onclick=\"redirectmain();\">Write a sketch</button><button id=\"printbu\" onclick=\"printfn();\">Print/Save</button><button id=\"deletebu\" onclick=\"deletefn();\">Delete this sketch</button></div>\n<div id=\"skchdiv\"><h2 id=\"skchstitle\"><b>".$sketchtitle."</b></h2>\n<div id=\"skch\">".$writeskch."</div></div>\n<script type=\"text/javascript\">\nvar flag =\"\";\nvar filename =\"\";\nvar sharetoken =\"\";\n</script>\n<script type=\"text/javascript\" src=\"../javascript/jquery-3.4.1.js\"></script>\n<script type=\"text/javascript\" src=\"../javascript/common_skch.js\"></script>\n</body>\n</html>";
	file_put_contents($filename2, $filecontent);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Char Sketch</title>
<link rel="stylesheet" type="text/css" media="screen and (orientation:portrait)" href="css/view_portrait.css">
<link rel="stylesheet" type="text/css" media="screen and (orientation:landscape)" href="css/view_landscape.css">
<link rel="stylesheet" type="text/css" media="print" href="css/view_landscape.css">
</head>
<body>
	<div id="shareinfo"><span id="skchlink">Here is the link to the sketch:<br/></span><input type="text" value="http://charsketchkgp.epizy.com/<?php echo($filename2)?>" id="skchlink2"> <button id="copybu" onclick="copyfn();">Copy Link</button>
	<?php 
		if(isset($_SESSION["share_token"]))
			echo("</br>Your Share Token: ".$_SESSION["share_token"]); 
	?></div></br>
	<h2 id="skchtitle"></h2>
	<pre><textarea id="writespace" name="writeskch" placeholder="Write your sketch here. Remember to save your sketches periodically in case of lengthy sketches" required><?php echo($_SESSION["writeskch"]); ?></textarea></pre></br>
	<button onclick="window.print();" id="printbu">Print</button>  <button onclick="viewAdvance();" id="chgview">Customize</button> 
	<div id="advancedSet">
		<span id="themespan">Select a theme</span></br>
		<select id="themename" name="access" onchange="changeback();">
				<option value="1">Wood Trunk and Paper (Default)</option>
				<option value="2">Roadside Trees</option>
				<option value="3">Coffee Beans and Jute</option>
				<option value="4">Sunset at Desert</option>
				<option value="5">Twin Leopards</option>
				<option value="6">Sunrise in Forest</option>
				<option value="7">Ice Cream</option>
				<option value="8">Chocolate Cupcakes</option>
				<option value="9">Birds and Pegions</option>
				<option value="10">Sack of Gifts</option>
				<option value="11">Wood and Paper</option>
				<option value="12">Yellow Roses</option>
				<option value="13">Woven Fabric</option>
				<option value="14">Grey Gradient</option>
				<option value="15">Plant in a pot</option>
		</select>
		<img id="themeimg">
		</br>
		<span id="fontspan">Select a font</span></br>
		<select id="fontname" name="access" onchange="changefont();">
			<option value="1">Delius</option>
			<option value="2">Courgette</option>
			<option value="3">Satisfy</option>
			<option value="4">Merienda</option>
			<option value="5">Vibur</option>
			<option value="6">Sofia</option>
			<option value="7">Marck Script</option>
		</select>
		<img id="fontimg"></br>
		<button id="cancelbu" onclick="hideAdvance();">Cancel</button>  <button id="savebu" formaction="customize.php">Save</button>
	</div>
<script type="text/javascript">
	document.getElementById("skchtitle").innerHTML = "<?php echo($_SESSION["sketchtitle"]); ?>";
	function copyfn(){
		var linkele = document.getElementById("skchlink2");
  		linkele.select();
  		linkele.setSelectionRange(0, 99999);
  		document.execCommand("copy");
	}
	function viewAdvance(){
		document.getElementById("advancedSet").style.display = "block";
	}
	function hideAdvance(){
		document.getElementById("advancedSet").style.display = "none";
	}
</script>
</body>
</html>