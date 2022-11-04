<?php

include('conexion.php');


$emausu=$_POST['emausu'];
$contraseña=$_POST['pasusu1'];
$sql="SELECT * FROM usuario WHERE emausu='$emausu'";

$result=mysqli_query($con,$sql);


if($result){
    $count=mysqli_num_rows($result);
    $row=mysqli_fetch_array($result);
    if($count==0){
        header('Location: ../olvidecontra.php?e=1');
       
    }else{
        $sql="UPDATE usuario SET pasusu='11111'
        WHERE emausu=$emausu";
        
        
    }    
}
