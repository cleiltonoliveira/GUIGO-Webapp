<html>
<body>    

<?php
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    $IMC = $peso / ($altura * $altura);

    echo "$IMC <br>";

    if($IMC < 17){
        echo "Muito abaixo do peso <br>";
    }
    else if($IMC >= 17 && $IMC < 18.50) {
        echo "Abaixo do peso <br>";
    }
    else if($IMC >= 18.50 && $IMC < 25.0) {
        echo "Peso normal <br>";
    }
    else if($IMC >= 25.0 && $IMC < 30.0) {
        echo "Acima do peso <br>";
    }
    else if($IMC >= 30.0 && $IMC < 35.0) {
        echo "Obesidade I <br>";
    }
    else if($IMC >= 35.0 && $IMC < 40) {
        echo "Obesidade II <br>";
    }
    else {
        echo "Obesidade III <br>";
    }

?>
</body>
</html>