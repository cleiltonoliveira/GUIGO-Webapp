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
                $aluno[$i][$j] = $_POST["aluno$i$j"];
                $nota = $j + 1;
                $alunoNum = $i + 1;
                echo 'Nota '. $nota .' do aluno '. $alunoNum . ": " .  $aluno[$i][$j] . "<br>";
            }
            $alunoMedia[$i] = ($aluno[$i][0] + $aluno[$i][1])/2;
            $j = $i + 1;
            echo "Media do aluno $j: $alunoMedia[$i]<br>";
        }
    ?>
</body>
</html>
