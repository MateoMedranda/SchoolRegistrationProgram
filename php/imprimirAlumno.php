<?php
echo "Datos del formulario del Alumno <br>";
$nom = $_POST["nombreA"];
$ape = $_POST["apellidoA"];
$nom = $_POST["nombreR"];
$ape = $_POST["apellidoR"];
$cor = $_POST["email"];
$tel = $_POST["Telefono"];
$fn = $_POST["fechaNacimiento"];
$eCivil = $_POST["curso"];
$gen = $_POST["genero"];

echo ("Nombre: $nom $ape <br>");
echo ("Cédula: $cedu <br>");
echo ("Teléfono: $tel <br>");
echo ("Email: $cor <br>");
echo ("Servicio de Interés: $serv <br>");
echo ("Comentario: $com <br>");
?> 