
<?php 

$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];

$adminUser = "Ana";
$adminPass = "123";

$outArray = array();
if( isset($_REQUEST['user']) && isset($_REQUEST['pass'])){
    if (($user==$adminUser)&&($pass==$adminPass)){
        $outArray = array( "login"=>"<p>Logado</p>", "message"=> "<p>Seja bem-vindo!</p>"); 
    }else{
        $outArray = array( "login"=>"<p>False</p>", "message"=> "<p>Usúario não utenticado</p>" );
    }    
} else {
    $outArray = array( "login"=>"<p>false</p>", "message"=> "<p>Informe usúario e Senha</p>" );
}

echo json_encode($outArray, JSON_UNESCAPED_UNICODE);