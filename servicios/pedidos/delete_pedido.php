<?php
    include_once('../conexion.php');
    $response=new stdClass();
    $codped=$_POST['codped'];
    $sql="delete from pedido where codped=$codped";
    $result=mysqli_query($con,$sql);
    if($result){
        $response->state=true;
        $response->detail="Pedido Eliminado";
    }else{
        $response->state=false;
        $response->detail="No se Pudo Eliminar El Pedido";
    }
    mysqli_close($con);
    header('Content-Type: application/json');
    echo json_encode($response);