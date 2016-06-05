<?php 
require_once "config.php";

$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);
    if (!$conn) {
        die('Não foi possível conectar: ' . mysqli_connect_error());
    }
$result = mysqli_query($conn, "INSERT INTO carros (marca,modelo) values ('$_POST[marca]','$_POST[modelo]')");
    if (!$result) {
        die('Invalid query: ' . mysqli_error());
    }
    if ($result == 1) {
        header("Location: admin.php");
    }
?>