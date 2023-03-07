
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título da página</title>
</head>
<body>
    <h1>
        
        
        
    </h1>
    <p>Seu nome e:</p>
    <input type="button" value="<?php $cima = $_GET["cima"]; echo($cima); ?>">
    
    <p>e sua idade e:</p>
    <input type="button" value="<?php $baixo = $_GET["baixo"]; echo($baixo); ?>">
</body>
<style>
    
    h1{
        text-align: center;
        color: red;
    }
    input {
        width: 95%;
        height: 7vh;
        font-size: 5vh;
    }
</style>
</html>




