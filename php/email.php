<?php

// Recebe os dados do formulario.
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['message'];

$text = 'Você será redirecionado para a página inicial automaticamente em 10 segundos!';
$return = '<meta http-equiv="refresh" content="10;URL=../index.html">';

// Valida o assunto.
if($subject === 'assunto'){
    echo '<b>Por favor, selecione um assunto!</b><br>'.$text.$return;
}else{
    $emailenviar = "seuemail@outlook.com.br"; // digite o e-mail que vai receber as mensagens do formulário.
    $destino = $emailenviar;

    // Corpo do e-mail.
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'De: $name<br> e-mail: $email<br>';
    $headers .= 'Assunto: $assunto<br>';
    $headers .= '$msg<br>';

    $enviaremail = mail($destino, $subject, $headers);

    if($enviaremail){
        $mgm = 'E-MAIL ENVIADO COM SUCESSO!<br>O link será enviado para o e-mail fornecido no formulário!<br>'.$text;
        echo $mgm.'<br>'.$return;
    } else {
        $mgm = 'ERRO AO ENVIAR E-MAIL!<br>'.$text;
        echo $mgm.'<br>'.$return;
    }
}

?>