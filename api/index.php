<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <title>Evidencia 4 Kevin Julio</title>
        </head>        
        <body>
            <div class="container">
                <h1>Teatro Colombia</h1>
                <h3>Escoge tu asiento</h3>
                <?php
                /*  Desarrollador: Kevin Julio Muñoz
                    Curso: Desarrollo web con PHP (2497510)
                    Evidencia: Taller “Uso de formularios para transferencia”
                */

                    //Se incluyen las dos funciones que se usarán.
                    include("tabla.php");
                    include("formulario.php");
                    //Mediante el uso de isset nos aseguramos de que se envíe la información
                    if(isset($_REQUEST["Enviar"])){
                                    //Se recibe la información en las variables que se indican
                                    $fila = $_POST['fila'];
                                    $puesto= $_POST['puesto'];
                                    $accion= $_POST['accion'];
                                    $StringEscenario=$_POST['lista'];
                                    //El String generado en el input oculto se convierte en un Array
                                    $count=0;
                                    for($i=0;$i<5;$i++){
                                        for($j=0;$j<5;$j++){
                                            $count=5*$i+$j;
                                            /*Se captura cada elemento del Array y se devuelve sólo una parte
                                            con la sunción substr*/
                                            $lista[$i][$j]=substr($StringEscenario,$count,1);
                                        }
                                        $count=0;
                                    }
                            
                            $lista=Accion($fila,$puesto,$accion,$lista);
                            //Se ejecuta la funcion y se muestra el cuadro con los asientos
                            cuadro($lista);
                    }
                    //Se envía información de los asientos libres "L" cuando se carga la página o se presiona "Reset"
                    else if(isset($_REQUEST["Reset"]) || !isset($_REQUEST["Enviar"])){
                        $lista=array(array("L","L","L","L","L"),array("L","L","L","L","L"),array("L","L","L","L","L"),array("L","L","L","L","L"),array("L","L","L","L","L"));
                        cuadro($lista);
                    }
                ?>
                <!-- Creación del formulario para recibir la información-->
                <table class="select">
                    <form method="POST">
                        <!-- se crea el array lista de forma oculta "hidden"-->
                        <input type="hidden" name="lista" value="<?php foreach ($lista as $fila) {foreach ($fila as $puesto){echo $puesto;}}?>"  />
                        <!--Ingreso de texto (Fila, Puesto)-->
                        <tr>
                            <td>Fila: </td>
                            <td>
                                <input type="text" name="fila" size="1">
                            </td>
                        </tr>
                        <tr>
                            <td>Puesto: </td>
                            <td>
        	    			    <input type="text" name="puesto" size="1">
                            </td>
                        </tr>
                        <!--Ingreso de selección (R,V,L)-->
                        <tr>
                            <td>Reservar: </td>
                            <td>
                                <input type="radio" name="accion" value="R" />
                            </td>
                        </tr>
                        <tr>
                            <td>Comprar: </td>
                            <td>
                                <input type="radio" name="accion" value="V" />
                            </td>
                        </tr>
                        <tr>
                            <td>Liberar: </td>
                            <td>
                                <input type="radio" name="accion" value="L" checked="checked" />
                            </td>
                        </tr>
                        <!--Botones-->
                        <tr>
                            <td>
                                <input class="boton" type="submit" value="Enviar" name="Enviar" />
                            </td>
                            <td>
                                <input class="boton" type="submit" value="Reset" name="Reset" />
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
            
        </body>