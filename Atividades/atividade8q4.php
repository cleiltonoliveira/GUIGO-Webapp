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
    $idade[10] = $_POST["idade11"];
    $idade[11] = $_POST["idade12"];
    $idade[12] = $_POST["idade13"];
    $idade[13] = $_POST["idade14"];
    $idade[14] = $_POST["idade15"];

    $faixaEtaria1 = 0;
    $faixaEtaria2 = 0;
    $faixaEtaria3 = 0;
    $faixaEtaria4 = 0;
    $faixaEtaria5 = 0;

    for($i = 0; $i < 15; $i++) {
        if(($idade[$i] > 1) && ($idade[$i] < 16)) {
            $faixaEtaria1++;
        } 
        else if(($idade[$i] > 15) && ($idade[$i] < 31)){
            $faixaEtaria2++;
        }
        else if(($idade[$i] > 30) && ($idade[$i] < 46)){
            $faixaEtaria3++;
        }
        else if(($idade[$i] > 45) && ($idade[$i] < 61)){
            $faixaEtaria4++;
        }
        else {
            $faixaEtaria5++;
        }
    }
    
    echo 'Quantidade de pessoas entre 1 e 15 anos: '. $faixaEtaria1."<br/>"; 
    echo 'Porcentagem: '. $faixaEtaria1*100/15 ."<br/><br/>";
    echo 'Quantidade de pessoas entre 15 e 30 anos: '. $faixaEtaria2."<br/>"; 
    echo 'Porcentagem: '. $faixaEtaria2*100/15 ."<br/><br/>";
    echo 'Quantidade de pessoas entre 30 e 45 anos: '. $faixaEtaria3."<br/>"; 
    echo 'Porcentagem: '. $faixaEtaria3*100/15 ."<br/><br/>";
    echo 'Quantidade de pessoas entre 45 e 60 anos: '. $faixaEtaria4."<br/>"; 
    echo 'Porcentagem: '. $faixaEtaria4*100/15 ."<br/><br/>";
    echo 'Quantidade de pessoas com mais de 60 anos: '. $faixaEtaria5."<br/>"; 
    echo 'Porcentagem: '. $faixaEtaria5*100/15 ."<br/><br/>";

?>
</body>
</html>