<?php

$nome = $_POST['name'];
$nome = $_POST['email'];
$nome = $_POST['subject'];
$nome = $_POST['message'];

$headers = "From: " . $name;

$corpoemail = 'Fale Conosco

               Nome: '     .$name.'
               Email: '    .$email.'
               Assunto: '  .$subject.'
               Mensagem: ' .$message.' ';

if(mail("gabriel.morozeski@gmail.com", "Fale Conosco",$corpoemail,$headers)) {

echo "<script>alert('Mensagem enviada com sucesso!');</script>";
header("Location: contato.html");

} else {
   echo "<script>alert('Erro ao enviar, tente diretamente pelo e-mail gabriel.morozeski@gmail.com');</script>";
}

?>
