<?php

require_once('configs/config.php');

$conex = new Conexion();
$conexion = $conex->conectar();

$sql = 'SELECT * FROM "Transaccion" ORDER BY id';
$stmt = $conexion->prepare($sql);
$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row["descripcion"]."<br>";
}

?>