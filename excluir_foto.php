<?php 
    include('conexao.php');
    $id_agenda = $_GET ['id_agenda'];
    $sql = "SELECT * FROM agenda WHERE id_agenda = $id_agenda";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EXCLUIR FOTO? </h1>
    <form action="excluir_foto_exe.php" 
          method="get" enctype="multipart/form-data">
          <input name="id_agenda" type="hidden" 
            value="<?php echo $row['id_agenda']?>">    
        <input name="id_agenda" type="hidden" 
            value="<?php echo $row['id_agenda']?>">    

        <div>
                <img src="<?php echo $row['foto']?>" width="100" height="80"/>
                <br>
            </div>
        <input type="submit" value="Excluir">
        <a href="listar_agenda.php">Voltar</a>
    </form>
</body>
</html>