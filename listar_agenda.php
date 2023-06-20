<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('conexao.php');
        $sql = "SELECT * FROM agenda";
        //mysqi_query => executa um comando no banco de dados
        $result = mysqli_query($con,$sql);
        // mysqli_fetch_array retorna apenas uma linha dos registros retornados
        $row = mysqli_fetch_array($result);
    ?>

    <h1>Consulta de usuários</h1>

        <table class="table table-bordered" align="center" border="1" width="500" >
            <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Apelido</th>
                <th scope="col">Endereco</th>
                <th scope="col">Bairro</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Telefone</th>
                <th scope="col">Celular</th>
                <th scope="col">E-mail</th>
                <th scope="col">Dt_cadastro</th>
            </tr>
            </thead>
    
            <?php
            do{
                echo "<tr>";
                    echo "<td>".$row['id_agenda']."</td>";
                    if($row['foto'] == "") echo "<td></td>";
                    else echo "<td><img src='".$row['foto']."' width='80' height='100'/></td>";
                    echo "<td>".$row['nome']."</td>";
                    echo "<td>".$row['apelido']."</td>";
                    echo "<td>".$row['endereco']."</td>";
                    echo "<td>".$row['bairro']."</td>";
                    echo "<td>".$row['cidade']."</td>";
                    echo "<td>".$row['estado']."</td>";
                    echo "<td>".$row['telefone']."</td>";
                    echo "<td>".$row['celular']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['dt_cadastro']."</td>";
                    echo "<td> <a href='altera_agenda.php?id_agenda=
                    ".$row["id_agenda"]."'>Alterar</a> </td>";
                    echo "<td><a href='excluir_agenda.php?id_agenda="
                    .$row['id_agenda']."'>Excluir</a></td>";
                    echo "<td><a href='excluir_foto.php?id_agenda="
                    .$row['id_agenda']."'>Excluir foto</a></td>";
                echo "</tr>";
            } while($row = mysqli_fetch_array($result))
            
        ?>

        <a href="index.php">Voltar</a>
    </table>
</body>
</html>
