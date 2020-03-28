<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Char Sketch</title>
<style type="text/css">
	body{
		background-color: darkslategrey;
		background-image: linear-gradient(45deg, rgb(50, 50, 50), rgb(100, 100, 100));
		color:blanchedalmond;
		min-height:100vh;
		margin-top:0px;
		margin-bottom:0px;
	}
	#searchform{
		position:fixed;
		box-sizing:border-box;
		top:0px;
		left:0px;
		background-color:rgba(0, 0, 0, 0.2);
		min-width:100vw;
		height:8vh;
	}
	#fname, #lname{
		position:absolute;
		min-width:35vw;
		background-color: transparent;
		color:blanchedalmond;
		border:1px solid blanchedalmond;
		height:6vh;
		top:1vh;
		box-sizing: border-box;
		padding-left:0.5vw;
	}
	#fname{
		left:2vw;
	}
	#lname{
		left:40vw;
	}
	#searchbu{
		display:none;
		background-color: rgba(0, 0, 0, 0.4);
	}
	#dummysearchbu{
		display:block;
		background-color: transparent;
	}
	#searchbu, #dummysearchbu{
		position:absolute;
		color:blanchedalmond;
		border: 1px solid blanchedalmond;
		outline:none;
		min-width:15vw;
		right: 2vw;
		top: 1vh;
		min-height: 6vh;
		box-sizing: border-box;
	}
	#resultdiv{
		display:none;
	}
	@media print, screen and (orientation:landscape) {
		#searchform{
		}
	}
	@media screen and (orientation:portrait){
	}
</style>
</head>
<body>
	<form id="searchform" method="post" onsubmit="preventDefault();">
		<input type="text" name="first_name" placeholder="First Name" id="fname" onchange="togbu();">
		<input type="text" name="last_name" placeholder="Last Name" id="lname" onchange="togbu();">
		<button id="dummysearchbu">Search Sketch</button>
		<button id="searchbu" onclick="loadfn();">Search Sketch</button>
	</form>
	<div id="resultdiv">
	</div>
	<script type="text/javascript">
		function togbu(){
			var namef = document.getElementById("fname").value;
			namef = namef.trim().split(' ').join('');
			document.getElementById("fname").value = namef;
			var namel = document.getElementById("lname").value;
			namel = namel.trim().split(' ').join('');
			document.getElementById("lname").value = namel;
			if(lname!=""||f_name!=""){
				document.getElementById("searchbu").style.display = "block";
				document.getElementById("dummysearchbu").style.display = "none";
			}
			else{
				document.getElementById("searchbu").style.display = "none";
				document.getElementById("dummysearchbu").style.display = "block";
			}
		}
		function loadfn(){

		}
	</script>
</body>
</html>