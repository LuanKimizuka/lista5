<?php

include('conexao.php');

$id_agenda = $_GET['id_agenda'];

$sql = "DELETE FROM agenda WHERE id_agenda=$id_agenda";

    $result = mysqli_query($con,$sql);
    if($result)
        echo "Deletado com sucesso!<br>";
    else
        echo "Erro ao deletar dados:". $msqli_erro($con)."!";
?>