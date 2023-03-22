<?php 
	$dados = file("produtos.txt");	
	$id = $_GET['cod'];
	unset($dados[$id]);
	unlink("produtos.txt");
	$string = implode("", $dados);

    $arquivo = fopen("produtos.txt", "a+");
	fwrite($arquivo, $string);
	fclose($arquivo);
	
	header("location: produto.php");





?>