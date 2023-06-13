<?php

    include("conexao.php");

        //upload fotos
    $nome_foto = "";
    if(file_exists($_FILES['foto']['tmp_name'])){
    $pasta_destino = 'foto/';
    $extensao = strtolower(substr($_FILES['foto']['name'],-4));
    $nome_foto = $pasta_destino . date("Ymd-His") . $extensao;
    move_uploaded_file($_FILES['foto']['tmp_name'],$nome_foto);
    }

    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $fone = $_POST['fone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    
    $dt_cadastro = date("Y-m-d"); 
    

    $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade,
    estado, telefone, celular, email, dt_cadastro, foto)";

    $sql .= " VALUES ('".$nome."','".$apelido."','".$endereco."',
    '".$bairro."','".$cidade."','".$estado."','".$fone."',
    '".$celular."','".$email."','".$dt_cadastro."', '".$nome_foto."')";

    $result = mysqli_query($con,$sql);
    
    if($result)
            echo "Dados cadastrados com sucesso!";
        else
            echo "Erro ao tentar cadastrar!";

?>

<a href="index.php">Voltar</a>