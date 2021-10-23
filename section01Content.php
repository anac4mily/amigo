


<center>
<h1>Amigo Ajudante</h1>

<h2 style="font-size: 15pt; color: #black ;
 background-color: white; text-align:center; 
 font-family: Arial;">Clique no botão para fazer o login </h2>
<input type="button" id="btnSct03" value="Login">   
</center>

<script type="text/javascript">
	$(document).ready(function() {
		$("#btnSct03").click(function() {
			$("#sct01" ).load("section03Content.php");
		});
	});
</script>