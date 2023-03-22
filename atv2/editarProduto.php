<?php
    if ($_POST) {
        $dados = $_POST;
        $produtos = file("produtos.txt");

        foreach($produtos as $prod){
            $line = explode(" - ", $prod);
            if($line[0] === $dados['codigo']){
                $line[0] = $dados['codigo'];
                $line[1] = $dados['nome'];
                $line[2] = $dados['estoque'];
                $line[3] = $dados['preço'];
                $line[0] = $dados['data'];  
            }
        }

        print_r($produtos);

    //   $string = implode(" - ", $dados );
    //   $arquivo = fopen("produtos.txt" , "a+");
    //   fwrite($arquivo, $string."\n");
    //   fclose($arquivo);
    };
    // header("location: produto.php")

    ?>