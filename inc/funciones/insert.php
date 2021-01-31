<?php
$nombre = $_POST["nombre"];
$sector = $_POST["sector"];
$fecha = $_POST["fecha"];
$zona = $_POST["zona"];
$sueldo = $_POST["sueldo"];
$codigo = $_POST["codigo"];
$accion = $_POST["accion"];

if($accion == 'crear'){
    include('conexion.php');
    try{
        $stmt = $conn->prepare("INSERT INTO guardar(nombre, fecha_nac, sector, zona, sueldo, codPersona)VALUES(?,?,?,?,?,?)");
        $stmt->bind_param('ssssis', $nombre,$fecha,$sector,$zona,$sueldo,$codigo);
        $stmt->execute();
        if($stmt->affected_rows > 0){
            $respuesta = array(
                'respuesta'=>'correcto'
            );
        }else{
            $respuesta = array(
                'respuesta'=>'error'
            );
        }
    }catch(Exception $e){
        $respuesta = array(
            'error' => $e->getMessage()
        );
    }
    $stmt->close();
    $conn->close();

    echo json_encode ($respuesta);
}