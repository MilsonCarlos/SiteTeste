<!DOCTYPE html>
<html Lang="PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-sacale=1.0">
    <title>Site</title>
    <link rel="stylesheet" href="../css/menunovo.css">
</head>

<body>
<?php require_once 'cabecalho.php';?>
    <br> <br>
    <form action="#" autocomplete="on" method="post">
        <fieldset class="quadro">
            <legend><b>LOGIN</b></legend>
            <br> <br>
            <input class="caixatexto" type="text" id="nome" name="nome" value="" placeholder="Nome" required>
            <br> <br> <br>
            <input class="caixatexto" type="password" id="senha" name="senha" value="" placeholder="Senha" required>
            <br> <br>
            <button><a href="index.php">Entrar</a></button>
        </fieldset>       
    </form>
       
</body>


</html>