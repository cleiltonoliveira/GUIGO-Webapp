<html>
<body>
<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

function igualdade ($n1, $n2)
{
    if($n1 == $n2) {
        return 1;
    } else {
        return 0;
    }
}

function somaproduto ($n1, $n2)
{
    $soma = $n1 + $n2;
    $produto = $n1 * $n2;
    echo "Soma = $soma <br>Produto = $produto <br>";
}

$resultado = igualdade($n1, $n2);
somaproduto($n1, $n2);

if($resultado == 1) {
?>
    <h1>Os números são iguais.</h1>
<?php
} else {
?>
    <h1>Os npumeros são diferentes.</h1>
<?php
}
?>

</body>
</html>
