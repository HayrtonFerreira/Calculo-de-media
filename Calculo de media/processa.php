<?php
    $nota1= $_POST['nota1'];
    $nota2= $_POST['nota2'];
    $nota3= $_POST['nota3'];
    $media = ($nota1 + $nota2 + $nota3) / 3;

    if ($media < 7) {
        $Resultado = " Infelizmente você foi Reprovado" ;
    } else {
        $Resultado =" Parabéns! você foi Aprovado" ;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="titulo">
        <h1>ESCOLA DOS DEV.</h1>
    </div>
    <div class="card">
        <form class="processa">
            <fieldset>
                <Legend>Sua Media é :</Legend>
                <p class="resposta"> <?php echo $media; ?> </p>
                <p class="resposta"><?php echo $Resultado; ?> </p>    
            </fieldset>
        </form>
    </div>
   
    
</body>
</html>
