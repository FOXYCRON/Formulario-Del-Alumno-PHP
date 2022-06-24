<html>
 <head>
    <title> Formulario del alumno </title>
 </head>
  <body>
 <?php

$rpt = ($_REQUEST['p1'] + $_REQUEST['p2'] + $_REQUEST['p3'])/3;
echo "Nombre del alumno: " .$val1;
  echo "<br>";
echo "Calificacion parcial 1: " .$p1;
  echo "<br>";
echo "Calificacion parcial 2: " .$p2;
  echo "<br>";
echo "Calificacion parcial 3: " .$p3;
  echo "<br>";
echo "Promedio: " .$rpt;


?>
<br>
<br>
<input type = "button" value = "Regresar" onclick = "window.location = 'formulariodealumno.php';">
    
  </body>
</html>