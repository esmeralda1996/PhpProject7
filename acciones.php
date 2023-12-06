<?php

function Accion($fila,$silla,$accion,$lista){
        //verifica la peticion del usuario; si la silla esta libre se modifica el Array
             if($lista[$fila-1][$silla-1]=="L"){
                $lista[$fila-1][$silla-1]=$accion;
        }
         //si la silla esta vendida se indica una alerta de vendida 
        else if($lista[$fila-1][$silla-1]=="V" ){
            echo "<script>alert('";
		if($accion=="L"||$accion=="R"||$accion=="V"){echo"Accion no Valida";}
		   echo "')";
		   echo "</script>'";
        }
         // Si la silla se  reserva y la solicitud del usurio es diferente se modifica el array 
         else if($lista[$fila-1][$silla-1]=="R"&&$accion!="R"){
            $lista[$fila-1][$puesto-1]=$accion;
        }
         //devueleve el array modificado
            return $lista;
   }
?>