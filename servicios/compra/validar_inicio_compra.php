<?php
session_start();
include('../conexion.php');
$response=new stdClass();

if(!isset($_SESSION['codusu'])){
    $response->state=false;
    $response->detail="NO ESTA LOGEADO";
    $response->open_login=true;

}else{
    include_once('../conexion.php');
    $codusu=$_SESSION['codusu'];
	$codpro=$_POST['codpro'];
	$sql="INSERT INTO pedido
    (codusu,codpro, fecped, estado, telusuped) 
    VALUES
    ($codusu,$codpro,now(),1,'')";
    $result=mysqli_query($con,$sql);
   
	if ($result) {
		$response->state=true;
		$response->detail="Producto Agregado";
	}else{
		$response->state=false;
		$response->detail="No Se Pudo Agregar Producto. Intente más tarde";
	}
	mysqli_close($con);
}

header('Content-Type: application/json');
echo json_encode($response);