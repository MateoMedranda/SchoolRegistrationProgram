<?php
echo "Datos del nuevo Alumno <br><br>";
$nomA = $_POST["nombreA"];
$apeA = $_POST["apellidoA"];
$fn = $_POST["fechaNacimiento"];
$curs = $_POST["curso"];
$nomR = $_POST["nombreR"];
$apeR = $_POST["apellidoR"];
$tel = $_POST["Telefono"];
$cor = $_POST["correoR"];
$gen = $_POST["genero"];

echo ("Nombre del alumno: $nomA $apeA <br>");
echo ("Fecha de nacimiento: $fn <br>");
echo ("Año de inscripción: $curs <br>");
echo ("Nombre del representante: $nomR $apeR <br>");
echo ("Teléfono: $tel <br>");
echo ("Email: $cor <br>");
?> 