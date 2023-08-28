<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <style>
    body {
        background-color: rgb(34, 43, 51);
        text-align: center;
        height: 200px;  
        width: 90%;
    }
    h1 {
        font-family: Arial, Helvetica, sans-serif;
        color:rgb(230, 230, 235);
        font-size: 30px;
        box-shadow: 5px;
    }
    label {
        font-family: Arial, Helvetica, sans-serif;
        color:rgb(230, 230, 235);
        font-size: 25px;
        box-shadow: 5px;
    }
    p {
        font-family: Arial, Helvetica, sans-serif;
        color:rgb(230, 230, 235);
        font-size: 25px;
        box-shadow: 5px;
    }
    input {
        font-size: 20px;
        box-shadow: 5px;
    }
    button {
            font-size: 20px;
            box-shadow: 5px;
    }
    </style>
</head>
<body>
    <h1>Calculadora de IMC em PHP</h1>
    <form method="get" action="">
        <label for="peso">Nome:</label>
        <input type="text" id="nome" name="nome"><br>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade"><br>

        <label for="altura">Altura:</label>
        <input type="text" id="altura" name="altura"><br>

        <label for="peso">Peso:</label>
        <input type="number" id="peso" name="peso"><br>

        <button type="submit">Calcular IMC</button>
</form>

    <?php
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
        $altura = $_GET['altura'];
        $peso = $_GET['peso'];

        $imc = $peso / ($altura * $altura);

        if ($imc < 18.5) {
        $status = "Abaixo do peso";
        } else if ($imc < 25) {
        $status = "Peso normal";
        } else if ($imc < 30) {
        $status = "Acima do peso";
        } else {
        $status = "Obeso";
        }

        echo "<p>".$nome.", idade " .$idade." tem o IMC de: ".$imc.", isso é considerado ".$status."</p>";
?>
</body>
</html>