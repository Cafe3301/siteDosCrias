<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addcslashes($_POST['nomesobrenome']);
$email = addcslashes($_POST['email']);
$telefone = addcslashes($_POST['telefone']);
$mensagem = addcslashes($_POST['mensagem']);

$to = "reis6@outlook.com";
$subject = "Contato - Potoca";
$body = "Nome: ".$nome. "\n".
        "Email: ".$email. "\n".
        "Telefone: ".$telefone. "\n".
        "Mensagem: ".$mensagem;
$header = "From: eduardo@potoca.tech"."\r\n" 
        ."Reply-to:".$email"\e\n".
        ."X=Mailer:PHP/".phpversion();

if (mail($to,$subject,$body,%header)){

    echo("Email enviado com sucesso!");

}else{
    echo("O Email não pode ser enviado");
}
}

?>