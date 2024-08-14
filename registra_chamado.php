<?php 

$arquivo = fopen('arquivo.txt', 'a'); // aqui eu abro o aquivo.txt

$titulo=str_replace('#' , "-", $_POST['titulo']);
$categoria=str_replace('#' , "-", $_POST['categoria']);
$descricao=str_replace('#' , "-", $_POST['descricao']); // nessas 3 linhas eu vou substituir o # caso o cliente escreva por -

$texto = $titulo .'#'. $categoria .'#'. $descricao . PHP_EOL; // aqui eu criei um variavel texto para armazenar a cocatenação das 3 categorias e depois com uma função nativa do php para pular linhas  

fwrite($arquivo, $texto); // aqui eu vou escrever no arquivo o que tiver na variavel texto
fclose($arquivo); // aqui eu fecho o arquivo
header('Location: abrir_chamado.php'); // aqui eu redireciono o cliente de volta para o abrir chamado.

?>
