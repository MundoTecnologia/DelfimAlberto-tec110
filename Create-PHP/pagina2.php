<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("conexao.php");
        $nome = trim($_POST["nome"]);
        $passe = trim($_POST["palavra-passe"]);
        $data_nasc =  trim($_POST["data"]);

        $erro = '';
        $sucesso = '';

        if(empty($nome) || empty($passe) || empty($data_nasc)){
          $erro = "Preencha todos os campos!";  
        }
        else{
        $inserir = "insert into usuario(nome,palavraPasse,data_nasc) values ('$nome','$passe','$data_nasc')";

        $sucesso = 'Cadastro feito com sucesso!';
        
        $res = $conex -> query($inserir);
    }
    echo $erro;
    echo $sucesso;

    ?>
</body>
</html>