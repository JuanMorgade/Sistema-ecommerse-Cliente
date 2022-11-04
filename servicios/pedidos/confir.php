<?php
session_start();
include_once('../conexion.php');
$response=new stdClass();

$codusu=$_SESSION['codusu'];
$telusu=$_POST['telusu'];
$sql="UPDATE pedido SET telusuped='$telusu', estado=2
where estado=1";
$result=mysqli_query($con,$sql);
   
if ($result) {
	$response->state=true;
}else{
	$response->state=false;
	$response->detail="No se pudo actualizar el pedido. Intente más tarde";
	}
mysqli_close($con);

header('Content-Type: application/json');
echo json_encode($response);