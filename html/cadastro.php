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
        <legend><b>CADASTRE-SE</b></legend>
        <br>        
        <input class="caixatexto" type="text" id="nome" name="nome" value="" placeholder="Nome" required>
        <br> <br> <br>               
        <input class="caixatexto" type="text" id="CPF" name="CPF" maxlength="11" value="" placeholder="CPF" required>
        <br> <br> <br>               
        <input class="caixatexto" type="text" id="endereco" name="endereco" value="" placeholder="Endereço" required>
        <br> <br> <br>  
        <input class="caixatexto" type="text" id="telefone" name="telefone" maxlength="11" value="" placeholder="Telefone" required>
        <br> <br> <br>        
        <input class="caixatexto" type="text" id="e-mail" name="e-mail" value="" placeholder="E-mail" required>
        <br> <br>
        <button><a href="login.php">Confirmar</a></button>
    </fieldset>   
</form>
     
</body>


</html>