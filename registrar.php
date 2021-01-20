<?php
print "<pre>";
print_r($_REQUEST);
print "</pre>\n";

print "<p>Su nombre es $_REQUEST[nom]</p>\n";
print "<p>Su apellido es $_REQUEST[cognom]</p>\n";
print "<p>Su correo es $_REQUEST[mail]</p>\n";
print "<p>La fecha seleccionada es $_REQUEST[date]</p>\n";
print "<p>Su genero es  $_REQUEST[sexe]</p>\n";
print "<p>Acepto condiciones $_REQUEST[check]</p>\n";



$fitxer = 'registre.txt';
$actual = file_get_contents($fitxer);
$actual .= "$_REQUEST[nom],$_REQUEST[cognom],$_REQUEST[mail],$_REQUEST[date],$_REQUEST[sexe],$_REQUEST[check],\n";
file_put_contents($fitxer, $actual);
?>
