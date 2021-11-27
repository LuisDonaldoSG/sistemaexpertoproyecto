<?php
require('preguntas.php');

$contadorMaterias = 0;

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Resultado</title>
</head>
<body>
<div class="container mt-5 mb-5">
    <h2 class = "text-center mb-5">Materias asignadas</h2>

    <?php
        $contadorMaterias = 0;
        foreach ($nuevo_plan as $key => $value) {
            if ($value == 'troncocomun'){
                $contadorMaterias = $contadorMaterias + 1;
            }
        }
    ?>

    <?php
        if ($contadorMaterias > 0){
    ?> 

        <h5 class = "text-center mb-3">Materias de tronco común</h5>
            <div class="alert alert-warning d-flex align-items-center" role="alert">    
                <div>
                    <ul >
                            <?php
                                foreach ($nuevo_plan as $key => $value) {
                                    if ($value == 'troncocomun'){
                            ?>
                                <li>
                                <?php echo $key ?> 
                                </li>
                            <?php
                                    }        
                                }
                            ?>
                    </ul>
                </div>
            </div>

    <?php
        }
    ?>

    <?php
        $contadorMaterias = 0;
        foreach ($nuevo_plan as $key => $value) {
            if ($value == 'formacioprofecional'){
                $contadorMaterias = $contadorMaterias + 1;
            }
        }
    ?>

    <?php
        if ($contadorMaterias > 0){
    ?> 

        <h5 class = "text-center mb-3">Materias de formación profecional</h5>
            <div class="alert alert-warning d-flex align-items-center" role="alert">    
                <div>
                    <ul >
                            <?php
                                foreach ($nuevo_plan as $key => $value) {
                                    if ($value == 'formacioprofecional'){
                            ?>
                                <li>
                                <?php echo $key ?> 
                                </li>
                            <?php
                                    }        
                                }
                            ?>
                    </ul>
                </div>
            </div>

    <?php
        }
    ?>


<?php
        $contadorMaterias = 0;
        foreach ($nuevo_plan as $key => $value) {
            if ($value == 'especialidadanalistadedatos'){
                $contadorMaterias = $contadorMaterias + 1;
            }
        }
    ?>

    <?php
        if ($contadorMaterias > 0){
    ?> 

        <h5 class = "text-center mb-3">Materias de la especialidad en analista de datos</h5>
            <div class="alert alert-warning d-flex align-items-center" role="alert">    
                <div>
                    <ul >
                            <?php
                                foreach ($nuevo_plan as $key => $value) {
                                    if ($value == 'especialidadanalistadedatos'){
                            ?>
                                <li>
                                <?php echo $key ?> 
                                </li>
                            <?php
                                    }        
                                }
                            ?>
                    </ul>
                </div>
            </div>

    <?php
        }
    ?>

<?php
        $contadorMaterias = 0;
        foreach ($nuevo_plan as $key => $value) {
            if ($value == 'especialidadadministraciondeproyectosinformaticos'){
                $contadorMaterias = $contadorMaterias + 1;
            }
        }
    ?>

    <?php
        if ($contadorMaterias > 0){
    ?> 

        <h5 class = "text-center mb-3">Materias de la especialidad de administración de proyectos informaticos</h5>
            <div class="alert alert-warning d-flex align-items-center" role="alert">    
                <div>
                    <ul >
                            <?php
                                foreach ($nuevo_plan as $key => $value) {
                                    if ($value == 'especialidadadministraciondeproyectosinformaticos'){
                            ?>
                                <li>
                                <?php echo $key ?> 
                                </li>
                            <?php
                                    }        
                                }
                            ?>
                    </ul>
                </div>
            </div>

    <?php
        }
    ?>

<?php
        $contadorMaterias = 0;
        foreach ($nuevo_plan as $key => $value) {
            if ($value == 'especialidadciberseguridadyadministracionderedes'){
                $contadorMaterias = $contadorMaterias + 1;
            }
        }
    ?>

    <?php
        if ($contadorMaterias > 0){
    ?> 

        <h5 class = "text-center mb-3">Materias de la especialidad en ciberseguridad y administración de redes </h5>
            <div class="alert alert-warning d-flex align-items-center" role="alert">    
                <div>
                    <ul >
                            <?php
                                foreach ($nuevo_plan as $key => $value) {
                                    if ($value == 'especialidadciberseguridadyadministracionderedes'){
                            ?>
                                <li>
                                <?php echo $key ?> 
                                </li>
                            <?php
                                    }        
                                }
                            ?>
                    </ul>
                </div>
            </div>

    <?php
        }
    ?>

<?php
        $contadorMaterias = 0;
        foreach ($nuevo_plan as $key => $value) {
            if ($value == 'optativas'){
                $contadorMaterias = $contadorMaterias + 1;
            }
        }
    ?>

    <?php
        if ($contadorMaterias > 0){
    ?> 

        <h5 class = "text-center mb-3">Materias optativas</h5>
            <div class="alert alert-warning d-flex align-items-center" role="alert">    
                <div>
                    <ul >
                            <?php
                                foreach ($nuevo_plan as $key => $value) {
                                    if ($value == 'optativas'){
                            ?>
                                <li>
                                <?php echo $key ?> 
                                </li>
                            <?php
                                    }        
                                }
                            ?>
                    </ul>
                </div>
            </div>

    <?php
        }
    ?>

</div>

</body>
</html>