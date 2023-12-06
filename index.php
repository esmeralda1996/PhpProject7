<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//Funciones
require("teatro.php");
require("acciones.php");
//if: recibe petición del usuario
if(isset($_REQUEST["Enviar"])){
            $fila = $_POST['fila'];
            $silla= $_POST['silla'];
            $accion= $_POST['accion'];
            $Stringteatro=$_POST['lista'];
            //El String del input pasa a ser un Array
            $count=0;
            for($i=0;$i<5;$i++){
            for($j=0;$j<5;$j++){
            $count=5*$i+$j;
            //El Array extrayendo informacion del String
            $lista[$i][$j]=substr($Stringteatro,$count,1);
            }
              $count=0;
            }
        //la respuesta del Array con la información modificada por el usuario
        $lista=Accion($fila,$silla,$accion,$lista);
        //Funcion para mostrar el Teatro
        Teatro($lista);
}
//Condicion if cuando el usario borra
// la informacion del formulario y cuando se carga la página
else if(isset($_REQUEST["Reset"]) || !isset($_REQUEST["Enviar"])){
    $lista=array(array("L","L","L","L","L"),array("L","L","L","L","L"),array("L","L","L","L","L"),array("L","L","L","L","L"),array("L","L","L","L","L"));
    Teatro($lista);
}
?>
    <body>
        <table style="margin:auto;">
        <form method="POST">
   
        <input type="hidden" name="lista" value="<?php foreach ($lista as $fila) {foreach ($fila as $silla){echo $silla;}}?>"/>
       <!--- Inputs, que van a capturar la información. mostrar las acciones--->
            <tr>
                <td>Fila: </td>
                <td>
                    <input type="text" name="fila" size="4">
                </td>
            </tr>
            <tr>
                <td>Silla: </td>
                <td>
		    <input type="text" name="silla" size="4">
                </td>
            </tr>
            <tr>    <td>Reservar: </td>
                <td>
                    <input type="radio" name="accion" value="R" />
                </td>
            </tr>
            <tr><td>Comprar: </td>
               <td>
                    <input type="radio" name="accion" value="V" />
               </td>
            </tr>
         
            <tr>
               <td>Liberar: </td>
               <td>
                    <input type="radio" name="accion" value="L" checked="checked"/>
                </td>
            </tr>
            <tr>
                
            <!--- Input -(boton)-->
                <td>
                    <input type="submit" value="Enviar" name="Enviar" />
                </td>
                <td>
                    <input type="submit" value="Borrar" name="Reset" />
                </td>
            </tr>
        </form>
    </table>
?>
    </body>
</html>
