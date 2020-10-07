<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

$conteudo = $_SESSION['id_u'].'*'.implode('*' , $_POST).PHP_EOL;

$arquivo = fopen('mensagens.txt', 'a');

fwrite($arquivo, $conteudo);

fclose($aquivo);

header('Location: contato.php');

?>