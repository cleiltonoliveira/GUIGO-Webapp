<html>
<body>    

<?php
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    echo "Valor 1: $valor1 <br>";
    echo "Valor 2: $valor2 <br>";

    if($valor1 < $valor2) {
        echo "$valor1 menor que $valor2";
    } else {
        echo "$valor1 maior que $valor2";
    }
?>
</body>
</html>
