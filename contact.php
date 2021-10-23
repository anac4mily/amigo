<?php

$name= isset($_POST["inputname"]) ? $_POST["inputname"] : '';
$email= isset($_POST["inputemail"]) ? $_POST["inputemail"] : '';
$phone= isset($_POST["inputphone"]) ? $_POST["inputphone"] : '';
$company= isset($_POST["inputcompany"]) ? $_POST["inputcompany"] : '';
$subject= isset($_POST["inputsubject"]) ? $_POST["inputsubject"] : '';
$mensagem= isset($_POST["inputmensagem"]) ? $_POST["inputmensagem"] : '';

$hostname = "localhost";
$bancodedados = "amigoajudante";
$usuario = "root";
$senha = '';

$mysqli = mysqli_connect($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}else{
  echo "conectado";
}


$sql = "INSERT INTO contato (name, email, telefone, assunto, mensagem, company) VALUES ('$name', '$email', '$phone', '$subject', '$mensagem', '$company')";
if (mysqli_query($mysqli, $sql)) {
       echo "SUCESSO";
 } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
 }
    mysqli_close($mysqli);
 
?>

