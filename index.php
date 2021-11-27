<?php
require('preguntas.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Proyecto final IA</title>
    
</head>
<body style = "background-color: #F0F7F7">
    <div class="container mt-5">
        <h3 class="text-center">Cuestionario de materias</h3>
        <p class= "text-center">Elija del 0 al 4 según su personalidad</p>
        <form action="preguntasProc.php" method="post">

        <ul class= "list-group text-center">
            <?php
                foreach($cuestionario as $index => $llave ) {
                    echo '<li class = "list-group-item">'.$llave[0].'</li>';
                    echo '<select class = "form-select"name = '.$index.'> <option value ="0">0</option> <option value ="1">1</option> <option value ="2">2</option> <option value ="3">3</option> <option value ="4">4</option></select>';
                    echo '<br/>';
                }
            ?>
        </ul>

                <button type="submit" class="btn btn-warning w-100">
                    Listo
                </button>

        </form>
    </div>
</body>
</html>