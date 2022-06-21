<?php
/*
CURSO: HACKING Y CERTIFICACIÓN WEB
ARCHIVO: CONFIG.PHP
Configuración y conexión a la base de datos. Es usado por el resto de ficheros PHP
*/
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "tutorial"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}