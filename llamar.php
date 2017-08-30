<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>


	<script type="text/javascript" src="jquery-3.2.1.min .js">

	</script>


	<script> 
		
$(document).ready(function() {

	
$("#buttona").click(function(event) {




	var respuesta = document.getElementById("nombrevalor").value;
	//alert(respuesta);
	
$.ajax({
	type:"GET",
	url:"execution.php",
	
	dataType:"text",
	data: {resu :respuesta}
})
.done(function(data) {

alert(data.d);

	$("#tabla").html(data).show('300');
})
.fail(function(xhr, status, error) {
	
	console.log(xhr);
	console.log(status);
	console.log(error);
})
.always(function() {
	console.log("complete");
});




});



});



		</script>
</head>
<body>
	
<form action="" method="GET">   


<input type="text" id="nombrevalor" name="resu">

<br>	

<button id="buttona">Cargar Tabla </button>


<div id="tabla"></div>
</form>

</body>
</html>