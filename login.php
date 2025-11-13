<?php
include("conexion.php");

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$resultado = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario='$usuario'");
$datos = mysqli_fetch_assoc($resultado);

if ($datos && hash('sha256', $contraseña) == $datos['contraseña']) {
    echo "ok";
} else {
    echo "error";
}
