function redirectmain(){
	window.location.href = "../";
}
function printfn(){
	document.getElementById("navdiv").style.display = 'none';
	window.print();
	document.getElementById("introdiv").style.display = 'block';
}
function deletefn(){
	var flag = confirm("Please do not delete this sketch. Press OK to delete.");
	if(flag == true){
		var url = window.location.pathname;
		var filename = url.substring(url.lastIndexOf('/')+1);
		url = '../delsketch.php';
		var form = $('<form action="' + url + '" method="post">' + '<input type="text" name="filename" value="' + filename + '" />' +'</form>');
		$('body').append(form);
		form.submit();
	}
}