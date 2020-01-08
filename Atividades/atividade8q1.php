<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="atividade8q1.php" method="post">
        Insira um valor: <input type="text" name="valor">
        <input type="submit" value="Enviar">
        <?php
            $valor = $_POST["valor"];
            echo "Valor: $valor <br>";

            for($i = 0; $i < 11; $i++) {
                $resultado = $i * $valor;
                echo "$resultado <br>";
            }
            /*echo "Olá Mundo! <br>";
    
            $valor = $_POST["valor"];
            echo "Valor: $valor <br>";*/
        ?>
    </form>
    


</body>
</html>
