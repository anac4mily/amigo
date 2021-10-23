
<center>
<form id="frmLogin">
	Usuário:  <input type="text" name="user"><br><br>
	Senha  :  <input type="text" name="pass" ><br><br>
	<input type="button" id="btnEnviar" value="Enviar" >
</form>
</center>
<script type="text/javascript">
	$(document).ready(function() {
		$("#btnEnviar").click(function() {
			var url   = "section04Content.php";
			var dados = $("#frmLogin").serialize();
			$.post( url, dados, function( responseText ) {
				 $("#sct01" ).html( responseText );
				var objResponse = JSON.parse( responseText );
				var outText = "<p>Obrigado por se cadastrar: </p>"+objResponse.login+"<br>"+"<p>Mensagem: </p>"+objResponse.message;  
				$("#sct01" ).html( outText);
				console.log( objResponse );
			} );
		});
	});
</script>