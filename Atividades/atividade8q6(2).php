<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $nAlunos = $_POST["nAlunos"];
    for($i = 0; $i < $nAlunos; $i++) {
        for($j = 0; $j < 2; $j++) {
    ?>
        <form action="atividade8q6(3).php" method="POST">
            Nota G<?php echo $j+1 ?> do aluno <?php echo $i+1; ?>: <input type="text" name="<?php echo 'aluno'.$i.$j;?>"><br>
            <input type="hidden" name="nAlunos" value="<?php echo $nAlunos;?>">                  
    <?php
        echo 'aluno'.$i.$j;
        }
    }
    ?>
            <input type="submit" value="Enviar">
        </form>
</body>
</html>