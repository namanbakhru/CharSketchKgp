<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="../favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Char Sketch</title>
<link rel="stylesheet" type="text/css" media="screen and (orientation:portrait)" href="../css/common_skch_portrait.css">
<link rel="stylesheet" type="text/css" media="screen and (orientation:landscape)" href="../css/common_skch_landscape.css">
<link rel="stylesheet" type="text/css" media="print" href="../css/common_skch_landscape.css">
<link href="https://fonts.googleapis.com/css?family=Delius&display=swap" rel="stylesheet"></head>
<body>
<div id="navdiv"><button id="writebu" onclick="redirectmain();">Write a sketch</button><button id="printbu" onclick="printfn();">Print/Save</button><button id="deletebu" onclick="deletefn();">Delete this sketch</button></div>
<div id="skchdiv"><h2 id="skchstitle"><b></b></h2>
<div id="skch"></div></div>
<script type="text/javascript">
var flag ="";
var filename ="";
var sharetoken ="";
</script>
<script type="text/javascript" src="../javascript/jquery-3.4.1.js"></script>
<script type="text/javascript" src="../javascript/common_skch.js"></script>
</body>
</html>