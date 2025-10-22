<?php

?>

<html>
    <head>
    <link rel="stylesheet" href="tchetche.css">

    </head>
    <form action="inserir_dados.php" method="post">

        <label for="nome">Insira seu nome:</label>
        <input name="nome" id="nome" type="text">

        <br>

        <label for="idade">Insira sua idade:</label>
        <input name ="idade" id="idade" type="number">

        <br>

        <label for = "CPF">Insira seu CPF:</label>
        <input name ="CPF" id="CPF" type="number">

        <br>
        <button type="submit">Enviar</button>
    </form>
</html>