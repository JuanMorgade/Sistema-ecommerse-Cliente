<?php
//1: ERROR DE CONEXION
//2: EMAIL INVALIDO
//3: CONTRASEÑA INVALIDA
include('conexion.php');
$emausu=$_POST['emausur'];
$nomusu=$_POST['nomusur'];
$apeusu=$_POST['apeusur'];
$sql="SELECT * FROM usuario WHERE emausu='$emausu'";

$result=mysqli_query($con,$sql);
if($result){
    $row=mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);
    if($count==0){
        //Puede Crear El Usuario
        $pasusu=$_POST['pasusur'];
        $pasusu2=$_POST['pasusur2'];
        
        
        if($pasusu!=$pasusu2){
            header('Location: ../registrar.php?er=3');
        }else{
            $pasusu=$pasusu;
            $sql="INSERT into usuario (codusu,nomusu,apeusu,emausu,pasusu,estado)
            VALUE ('','$nomusu','$apeusu','$emausu','$pasusu',1)";
            $result=mysqli_query($con,$sql);
            $codusu=mysqli_insert_id($con);
            session_start();
            $_SESSION['codusu']=$codusu;
            $_SESSION['emausu']=$emausu;
            $_SESSION['nomusu']=$nomusu;
            $_SESSION['apeusu']=$apeusu;
            header('Location: ../cursos.php');
        }
    }else{
       
        header('Location: ../registrar.php?er=2');
    }
}else{
    
    header('location: ../registrar.php?er=1');
}