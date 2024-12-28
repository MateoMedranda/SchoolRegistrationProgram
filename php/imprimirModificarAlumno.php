<?php
echo "Datos actualizados del Alumno <br><br>";
$nomA = $_POST["alumnos"];
$curs = $_POST["curso"];
$nomR = $_POST["nombreR"];
$apeR = $_POST["apellidoR"];
$tel = $_POST["Telefono"];
$cor = $_POST["correoR"];
$gen = $_POST["genero"];

echo ("Nombre del alumno: $nomA <br>");
echo ("Año de inscripción: $curs <br>");
echo ("Nombre del representante: $nomR $apeR <br>");
echo ("Teléfono: $tel <br>");
echo ("Email: $cor <br>");
?> 