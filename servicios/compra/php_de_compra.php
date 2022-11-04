<?php

$codpro=$_POST['total'];
require __DIR__.'.../vendor/autoload.php';
$access_token='APP_USR-3168818756642413-090815-171faf2a13cf47d120f04416ece74592-1194761399';
MercadoPago\SDK::setAccessToken($access_token);
$preference = new MercadoPago\preference();
$preference->back_urls=array(
        "success"=>"http://localhost/Sistema-ecommerce/correcto.php",
        "failure"=>"http://localhost/Sistema-ecommerce/fail.php",
        "pending"=>"http://localhost/Sistema-ecommerce/fail.php"
    );

        $productos=[];
        $item=new MercadoPago\item();
        $item->title="CURSOS DE PASTELERIA";
        $item->quantity=1;
        $item->unit_price=45;
        
        array_push($productos,$item);

        $preference->items=$productos;
        $preference->save();
?>