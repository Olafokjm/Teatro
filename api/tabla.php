<?php
function cuadro($lista){
    //Creación de tabla con asientos
echo "<table class='sits'>";
            echo "<tr>";
            echo "<th colspan='6'>E S C E N A R I O</th>";
            echo "<tr>";
                echo "<th></th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th> 
                <th>5</th>
            </tr>";
    
$i=1;
// Imprimimos el contenido de la tabla
foreach ($lista as $fila) {
    echo "<tr>";
       echo "<th>";
       echo $i;
       echo "</th>";
    //Impresión de datos en las celdas
    foreach ($fila as $silla) {
        echo "<td>";
        echo $silla;
        echo "</td>";
    }
    echo "</tr>";
    $i++;
    }
echo "</table>";
}
?>