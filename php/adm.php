<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" />
    <title>ADM</title>
</head>
<body>
    <?php
        require "conexao.php";
        $sql = "SELECT * from usuarios";
        $dados = mysqli_query($conexao, $sql);
    ?>
    <a href="../content.html">Conteudo</a>
    <table>
        <thead>
            <td>Nome</td>
            <td>Email</td>
            <td>Acões</td>
        </thead>
        <tbody>
            <?php 
                while($linha = mysqli_fetch_assoc($dados)):
            ?>
                <tr>
                    <td><?= $linha['nome']?></td>
                    <td><?= $linha['email']?></td>
                    <td>Remover</td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>