<?php
    if ($_POST) {
      $dados = $_POST;

      $string = implode(" - ", $dados );
      $arquivo = fopen("produtos.txt" , "a+");
      fwrite($arquivo, $string."\n");
      fclose($arquivo);
    };
    header("location: produto.php")

    ?>