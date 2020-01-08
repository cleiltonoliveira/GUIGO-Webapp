<html>
<body>    

<?php
    $nota[0] = $_POST["nota1"];
    $nota[1] = $_POST["nota2"];
    $nota[2] = $_POST["nota3"];
    
    $media = 0;

    for($i = 0; $i < 3; $i++) {
        $media += $nota[$i];
    }

    $media = $media / 3;

    if($media >= 6) {
        echo "Aprovado";
    } else {
        echo "Reprovado"; 
    }

?>
</body>
</html>