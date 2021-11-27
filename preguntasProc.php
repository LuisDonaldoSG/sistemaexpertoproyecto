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
arsort($prioridades);


$nuevo_plan = array();
$formacion_profesional = 0;
$tronco_comun = 0;
$optativas = 0;
$m_especialidad = 0;

foreach($prioridades as $w => $x) {
//    echo "materia: ".$w." numero: ".$x."<br>";
    foreach($materias as $y => $z ) {
        //    echo "materia: ".$y." tipo: ".$z."<br>";
        if($z == 'formacioprofecional' && $w == $y) {            
            $nuevo_plan[$y] = $z;
        }
        if($z == 'troncocomun' && $w == $y && intval($x) != 4) {
            $nuevo_plan[$y] = $z;            
        }
        //Especialidad pendiente        
        if($z != 'troncocomun' && $z != 'formacioprofecional' && $z != 'optativas' && $w == $y && $m_especialidad < 8 ) {            
            $m_especialidad++;
            $nuevo_plan[$y] = $z;            
        }
    }    
}
foreach($prioridades as $w => $x) {
    foreach($materias as $y => $z ) {
        if($z == 'optativas' && $w == $y && count($nuevo_plan) < 30) {
            $nuevo_plan[$y] = $z;            
        }
    }
}
var_dump($nuevo_plan)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    
</body>
</html>