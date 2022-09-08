<?php
function Accion($fila,$puesto,$accion,$lista){
        //Cambio de la opción "libre"
        if($lista[$fila-1][$puesto-1]=="L"){
            $lista[$fila-1][$puesto-1]=$accion;
        }
        //Cambio de la opción "Vendido"
        else if($lista[$fila-1][$puesto-1]=="V" ){
            echo "<script>alert('";
				if($accion=="L" || $accion=="R" || $accion=="V"){
                    echo " Accion no permitida";}
			echo "')";
			echo "</script>'";
        }
        //Cambio de la opción "Reservado"
        else if($lista[$fila-1][$puesto-1]=="R" && $accion!="R"){
            $lista[$fila-1][$puesto-1]=$accion;
        }
        //Se retorna el array dependiendo de la opción modificada
        return $lista;
}
?>