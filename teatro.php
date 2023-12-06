<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
function teatro($lista){
    
//Se crea la tabla y sus encabezados

    echo "<table class='tg' border='1' style='margin:auto;'>";
    echo "<tr>";
    echo "<th colspan='6'>Teatro</th>";
    echo "<tr>";
    echo "<th></th>
          <th>1</th>
          <th>2</th>
          <th>3</th>
          <th>4</th> 
          <th>5</th>
          </tr>";
    $i=1;

/* Se imprime la Tabla*/
    
foreach ($lista as $fila) {
    echo "<tr>";
    echo "<th>";
    echo $i;
    echo "</th>";
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
