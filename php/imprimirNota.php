<?php
echo "Datos nota del Alumno <br><br>";
$nomA = $_POST["alumnos"];
$curs = $_POST["curso"];
$mat = $_POST["materias"];
$not = $_POST["nota"];
$gen = $_POST["genero"];

echo ("Nombre del alumno: $nomA <br>");
echo ("Año de inscripción: $curs <br>");
echo ("Materia: $mat <br>");
echo ("Nota: $not <br>");

?> 