<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="atividade8q11(2).php" method="POST">
        Insira dois números e escolha a operação: <br>
        Primeiro número: <input type="text" name="op1"> <br>
        <select name="operador" size="1"> 
            <option>soma</option>
            <option>subtracao</option>
            <option>multiplicacao</option>
            <option>divisao</option>
        </select> <br>
        Segundo número: <input type="text" name="op2"> <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>