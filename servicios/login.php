<?php
//1: ERROR DE CONEXION
//2: EMAIL INVALIDO
//3: CONTRASEÑA INVALIDA
include('conexion.php');
$emausu=$_POST['emausu'];
$sql="SELECT * FROM usuario WHERE emausu='$emausu'";


$result=mysqli_query($con,$sql);
if($result){
    $row=mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);
    $pasusu=md5($_POST['pasusu']);
    $prueba=$row['pasusu'];
    if($count!=0){
        $pasusu = (isset($_POST['pasusu'])) ? $_POST['pasusu'] : '';
        //$pasusu = md5($_POST['pasusu']);

        if($prueba != $pasusu){
            header('Location: ../login.php?e=3');
        }else{
            session_start();
            $_SESSION['codusu']=$row['codusu'];
            $_SESSION['emausu']=$row['emausu'];
            $_SESSION['nomusu']=$row['nomusu'];
            header('Location: ../cursos.php');
        }
    }else{
       
        header('Location: ../login.php?e=2');
    }
}else{
    
    header('location: ../login.php?e=1');
}