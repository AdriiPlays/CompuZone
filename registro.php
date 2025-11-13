<?php
include("conexion.php");

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$verificar = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario='$usuario'");

if (mysqli_num_rows($verificar) > 0) {
    echo "Ese usuario ya esta en uso";
    exit;
}


$contraseña_encriptada = hash('sha256', $contraseña);
mysqli_query($conn, "INSERT INTO usuarios (usuario, contraseña) VALUES ('$usuario', '$contraseña_encriptada')");

echo "ok";
