<html>
<body>    

<?php
    $idade[0] = $_POST["idade1"];
    $idade[1] = $_POST["idade2"];
    $idade[2] = $_POST["idade3"];
    $idade[3] = $_POST["idade4"];
    $idade[4] = $_POST["idade5"];
    $idade[5] = $_POST["idade6"];
    $idade[6] = $_POST["idade7"];
    $idade[7] = $_POST["idade8"];
    $idade[8] = $_POST["idade9"];
    $idade[9] = $_POST["idade10"];

    $demaior = 0;

    for($i = 0; $i < 10; $i++) {
        if($idade[$i] >= 18) {
            $demaior++;
        }
    }
    
    echo "$demaior";
?>
</body>
</html>