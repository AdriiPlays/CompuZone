<?php
$conn = mysqli_connect("localhost", "admuro", "Adrian1212", "login_db");

if (!$conn) {
    die("Error al conectar con la base de datos");
}
