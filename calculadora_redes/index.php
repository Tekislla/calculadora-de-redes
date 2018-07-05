<?php

    require_once "functions.php";

?>

<!doctype html>
<head>

    <meta charset="UTF-8">
    <title>Calculadora de Redes</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">

</head>

<body>

<div>
    <form action="index.php" method="post">

        <input type="text" name="ip" placeholder="Insira um IP">
        <br>
        <input type="number" name="mask" placeholder="Informe a máscara em bits">
        <br>
        <input type="submit" value="Enviar">

    </form>
</div>

</body>

</html>
