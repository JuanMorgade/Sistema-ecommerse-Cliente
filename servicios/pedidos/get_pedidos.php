<?php
include('../conexion.php');
$response=new stdClass();

session_start();
$codusu=$_SESSION['codusu'];
$eestado=3;
$datos=[];
$i=0;

$sql="select * from pedido ped
inner join producto pro
on ped.codpro=pro.codpro
where ped.estado=$eestado && ped.codusu=$codusu";

$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
	$obj=new stdClass();
    $obj->nompro=utf8_encode($row['nompro']);
    $obj->prepro=$row['prepro'];
    $obj->fecped=$row['fecped'];
    $obj->estado=$row['estado'];
    $obj->telusuped=$row['telusuped'];
	$datos[$i]=$obj;
	$i++;
}
$response->datos=$datos;
mysqli_close($con);
header('Content-Type: application/json');
echo json_encode($response);
