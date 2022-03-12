<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Estilo.CSS">
    <title>Guia 5 ejercicio 2</title>
</head>
<body>
    <?php 
        $arreglo = array(
            "Paola"=>array("Tarea"=>"7","Invest"=>"10","Examen"=>"8"),
            "Edgardo"=>array("Tarea"=>"9","Invest"=>"9","Examen"=>"7"),
            "Kevin"=>array("Tarea"=>"9","Invest"=>"7","Examen"=>"7"),
            "Lucia"=>array("Tarea"=>"9","Invest"=>"8","Examen"=>"7"),
            "Angela"=>array("Tarea"=>"6","Invest"=>"8","Examen"=>"8"),
            "Franco"=>array("Tarea"=>"6","Invest"=>"8","Examen"=>"6"),
            "Adonai"=>array("Tarea"=>"7","Invest"=>"10","Examen"=>"8"),
            "Luis"=>array("Tarea"=>"9","Invest"=>"9","Examen"=>"7"),
            "Cristina"=>array("Tarea"=>"9","Invest"=>"7","Examen"=>"7"),
            "Juan"=>array("Tarea"=>"9","Invest"=>"8","Examen"=>"7"),
            "Marilyn"=>array("Tarea"=>"6","Invest"=>"8","Examen"=>"8"),
            "Joey"=>array("Tarea"=>"6","Invest"=>"8","Examen"=>"6"),
        );
    ?>

    <div class="titulo">
        Promedio de alumnos: 
    </div>
    <div class="resultados">
        
        
<?php
        $NotaPromGrupo = array();
        $Contador=0;
        ?>

    <div class="divTabla">
        <table border="1"
                bordercolor=aliceblue
                bgcolor=white
                cellspacing=0
                cellpadding=10
                
                class="tabla"
        >
            <tr style="background-color: darkcyan;">
                <th>Alumno</th>
                <th>Tarea</th>
                <th>Investigacion</th>
                <th>Examen</th>
                <th>Nota promedio</th>
            </tr>

            <?php
               
                $Contador = 0;
                foreach($arreglo as $key => $value)
                { 
                    $Ganancia1 = $arreglo[$key]["Tarea"] * 0.50;
                    $Ganancia2 = $arreglo[$key]["Invest"] * 0.30;
                    $Ganancia3 = $arreglo[$key]["Examen"] * 0.20;
                    $notaProm = $Ganancia1 + $Ganancia2 + $Ganancia3;
                    $NotaPromGrupo[]=$notaProm; 
                    
                    if($Contador % 2 != 0)
                    { ?><tr style="background-color: lightgrey;"><?php
                    }
                    else
                    {
                        ?><tr><?php
                    }?>
                    
                        <td><?php echo $key ?></td>
                        <td><?php echo $arreglo[$key]["Tarea"] ?></td>
                        <td><?php echo $arreglo[$key]["Invest"] ?></td>
                        <td><?php echo $arreglo[$key]["Examen"] ?></td>
                        <td><?php echo $notaProm ?></td>

                    </tr>


                <?php 
                    $Contador++;    }
                ?>
        </table>
    </div>

    <?php
?>







    </div>
</body>
</html>













