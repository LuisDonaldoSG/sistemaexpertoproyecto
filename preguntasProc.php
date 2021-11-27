<?php
require('preguntas.php');

foreach($cuestionario as $index => $cosas ) {

    //echo 'respuesta '.$_POST[$index]. "\n";

    foreach($cosas[1] as $item){

        $idP = $item;
        foreach($prioridades as $key => $value){

            if ($idP == $key) {
                $prioridades[$key] += intval($_POST[$index]); ;
            }
        }
    }
}

echo var_dump($prioridades);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resuktado</title>
</head>
<body>
    
</body>
</html>