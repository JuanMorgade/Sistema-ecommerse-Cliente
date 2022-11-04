<?php
include('../conexion.php');
$response=new stdClass();

session_start();
$codusu=$_SESSION['codusu'];

function estado2texto($id){
	switch ($id) {
		case '1':
			return 'Por procesar';
			break;
		case '2':
			return 'Por pagar';
			break;
		case '3':
			return 'Pagado';
			break;	
		default:
			break;
	}
}
$datos=array();
$datos=[];
$i=0;

$sql="select *,ped.estado estadoped from pedido ped
inner join producto pro
on ped.codpro=pro.codpro
where ped.estado=1 && ped.codusu=$codusu";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){
	$obj=new stdClass();
	$obj->codped=$row['codped'];
	$obj->codpro=$row['codpro'];
	$obj->nompro=utf8_encode($row['nompro']);
	$obj->prepro=$row['prepro'];
	$obj->rutimapro=$row['rutimapro'];
	$obj->fecped=$row['fecped'];
	$obj->telusuped=$row['telusuped'];
	$obj->estado=$row['estadoped'];
	$obj->estadotext=estado2texto($row['estadoped']);
	$datos[$i]=$obj;
	$i++;
}
$response->datos=$datos;

mysqli_close($con);
header('Content-Type: application/json');
echo json_encode($response);


