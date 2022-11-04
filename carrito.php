<?php
    session_start();
?>

<?php
    if($codusu=$_SESSION['codusu']== ''){
        header('Location: error404.php');
    }else{
        $codusu=$_SESSION['codusu'];
        
        include('servicios/conexion.php');
        require __DIR__.'/vendor/autoload.php';
        $access_token='APP_USR-3168818756642413-090815-171faf2a13cf47d120f04416ece74592-1194761399';
        MercadoPago\SDK::setAccessToken($access_token);
        $preference = new MercadoPago\preference();
        $preference->back_urls=array(
                "success"=>"http://localhost/Sistema-ecommerce/correcto.php",
                "failure"=>"http://localhost/Sistema-ecommerce/fail.php",
                "pending"=>"http://localhost/Sistema-ecommerce/fail.php"
            );
                $sql="select *,ped.estado estadoped from pedido ped
                inner join producto pro
                on ped.codpro=pro.codpro
                where ped.estado=1 && ped.codusu=$codusu";
                $result=mysqli_query($con,$sql);
                $total=0;
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

                    $total=$total+$obj->prepro;
                }
                
                $productos=[];
                $item=new MercadoPago\item();
                $item->title="CURSOS DE PASTELERIA";
                $item->quantity=1;
                $item->unit_price=$total;
                
                array_push($productos,$item);

                $preference->items=$productos;
                $preference->save();
    }
        
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--FONTS DE GOOGLE -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!--MI CSS-->
    <!--<link rel="stylesheet" href="css/estilo.css">-->
    <!-- CSS DE AOS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--CSS DE SASS-->
    <link rel="stylesheet" href="css/style.css">
    <title>Cami Zandri Pasteleria</title>

</head>

<body>
<header class="row header--sticky">
        <div class="col-12 navegador">
            <nav class="header__nav navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="./index.php">
                    <img src="imagen/logo.png" alt="logo" width="100" height="100">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="header__nav__ul--justify navbar-nav">
                        <?php
                            if(isset($_SESSION['codusu'])){
                                echo
                                '<li  class="header__nav__ul__li--style nav-item" onclick="mostrar_opciones()">
                                <a class="header__nav__ul__li__a--link" href="login.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>'.$_SESSION['nomusu'].'
                            </li>';
                            }else{
                                
                        ?>
                        
                        <li class="header__nav__ul__li--style nav-item">
                            <a class="header__nav__ul__li__a--link" href="login.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                        </li>
                        <?php
                        }
                        ?>
                        <li class="header__nav__ul__li--style nav-item active">
                            <a class="header__nav__ul__li__a--link" href="index.php">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="header__nav__ul__li--style nav-item">
                            <a class="header__nav__ul__li__a--link" href="presupuesto.php">Presupuesto</a>
                        </li>
                        <li class="header__nav__ul__li--style nav-item">
                            <a class="header__nav__ul__li__a--link" href="conoceme.php">Conoceme</a>
                        </li>
                        <li class="header__nav__ul__li--style nav-item">
                            <a class="header__nav__ul__li__a--link" href="productos.php">Mis Productos</a>
                        </li>
                        <li class="header__nav__ul__li--style nav-item">
                            <a class="header__nav__ul__li__a--link" href="cursos.php">Cursos</a>
                        </li>
                        <li class="header__nav__ul__li--style nav-item">
                            <a class="header__nav__ul__li__a--link" href="carrito.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </li>
                        
                    </ul>
                   
                </div>
            </nav>
        </div>
    </header>
    
    <article>
        <section class="row">
            <div class="col-12 mt-5">
                <br><br>
                <h2 class="subtitulo mt-5 text-center">Carrito de Compras</h2>
            </div>
        </section>   

        <section class="main_content">
            <div class="compra_curso">
                <div class="body_pedidos" id="space-list">
                </div>
                <br>
                <h3>Datos de Pago:</h3>
                <br>
                <div class="p-line"><div>MONTO TOTAL:</div>$<span id="montototal"></span></div>
                <br>
                <input class="telcom" type="text" id="telusu" placeholder="Su Teléfono">
                <h4>Tipo de Pago:</h4>
                <br>
                
                <div class="prueba1">
                <button onclick="procesar_compra()" class="botonn">Pagar Con Transferencia Bancaria</button>
                
                    <button onclick="procesar_compra1()" class="botonn">Pagar Con Mercado Pago</button>
                    
                
                        <script src="https://sdk.mercadopago.com/js/v2"></script>
                        <div class="cho-container" ></div>
                    
                    
                </div>
                
                
            </div>
        </section>
    </article>
    
 
    
    <!--FOOTER-->
    <footer>
        <div class="footer">
            <div id="button"></div>
            <div id="container">

                <div class="row ">
                    <div class=" col-12 col-md-4 text-center ">
                        <img src="./imagen/logo_footer.png" alt="logo_footer">
                        <p class="name"> <i class="bi bi-geo-alt"></i>Merlo, Provincia de Buenos Aires, Argentina
                        </p>
                        <p class="name"> <i class="bi bi-telephone"></i>(+54) 9 11 2268-1597</p>
                    </div>
                    <div class=" col-12 col-md-4 text-center ">
                        <p class="name">Seguinos en </p>
                        <a class=" social" href="https://www.instagram.com/camizandri.pasteleria/?hl=es"><i
                                class="bi bi-instagram"></i></a>
                        <a class=" social" href="https://www.youtube.com/channel/UCoGu1YIzhJwGc2mn35DY3DA"><i
                                class="bi bi-youtube"></i></a>
                        <p class="name"> Cami Zandri &copy; 2022</p>
                    </div>
                    <div class=" col-12 col-md-4 text-center mt-1">
                        <p class="name"> From Morgade Juan Pablo</p>
                        <img src="./imagen/Logo-Ideas-sin 2.png" alt="logo_empresa">
                        <p class="name"> <i class="bi bi-geo-alt"></i> Ituzaingó, Provincia de Buenos Aires, Argentina
                        </p>
                        <p class="name"> <i class="bi bi-telephone"></i> (+54) 9 11 3515-2345</p>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!--SCRIPT DE BOOTSTRAP-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
    <!--SCRIPT DE AOS-->

    <!--SDK MercadoPago.js V2-->
    <script type="text/javascript">
        function mostrar_opciones(){
            if(document.getElementById("ctrl-menu").style.display=="none"){
                document.getElementById("ctrl-menu").style.display="block";
            }else{
                document.getElementById("ctrl-menu").style.display="none";
            } 
        }
    </script>
    <div class="menu-opciones" id="ctrl-menu" style="display: none;">
        <ul>
            <li><a href="historial.php">
                    <div class="menu-opcion">Historial de Compras</div>
                </a>
            </li>

            <li><a href="loguot.php">
                    <div class="menu-opcion">Salir</div>
                </a>
            </li>
        </ul>
    </div>

    <script
          src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous">
    </script>
    
    <script type="text/javascript">
        $(document).ready(function(){
			$.ajax({
				url:'servicios/pedidos/get_por_procesar.php',
				type:'POST',
				data:{},
				success:function(data){
					console.log(data);
					let html='';
                    let montototal=0;
					
					for (var i = 0; i < data.datos.length; i++) {
						html+=
						'<div class="item_pedidos">'+
							'<div class="pedido_img">'+
								'<img src="imagen/Cursos.jpg" alt="">'+
							'</div>'+
							'<div class="pedido_detalle">'+
								'<h3>Curso de '+data.datos[i].nompro+'</h3>'+
								'<p><b>Precio:</b> $'+data.datos[i].prepro+'</p>'+
								'<p><b>Fecha:</b> '+data.datos[i].fecped+'</p>'+
								'<p><b>Estado:</b> '+data.datos[i].estadotext+'</p>'+
								'<p><b>Teléfono:</b> '+data.datos[i].telusuped+'</p>'+
                                '<div class="btn-borrar">'+
                                    '<button class="bnt-delete-cart" onclick="delete_product('+data.datos[i].codped+')"> Eliminar</button>'+
                                '</div>'+
							'</div>'+
						'</div>';
						if (data.datos[i].estado=="1") {
							montototal+=parseFloat(data.datos[i].prepro);
						}    
					}
                    if(data.datos.length==0){
                            Swal.fire({
                            title: "No hay Productos En Su Carrito",
                            icon: "error",
                            timer: 2500
                        });
                        setTimeout(() => {
                            window.history.back();
                        }, 2000);
                    }
					document.getElementById("space-list").innerHTML=html;
                    document.getElementById("montototal").innerHTML=montototal;

				},
				error:function(err){
					console.error(err);
				}
                
			});
		});

        function delete_product(codped){
            $.ajax({
                    url:'servicios/pedidos/delete_pedido.php',
                    type:'POST',
                    data:{
                        codped:codped,
                    },
                    success:function(data){
                        console.log(data);
                        if(data.state){
                            Swal.fire({
                            title: data.detail,
                            icon: "success",
                            timer: 2500
                        });
                            setTimeout(() => {
                                window.location.reload();
                            }, 2000);
                            
                        }else{
                            Swal.fire({
                                title: data.detail,
                                icon: "error",
                                timer: 2500
                            });
                            
                        }
                    },
                    error:function(err){
                        console.error(err);
                    }
                });
        }

        function procesar_compra(){
            let telusu=$("#telusu").val();
            
            if(telusu==""){
                Swal.fire({
                        title: "Complete Los Campos",
                        icon: "error",
                        timer: 2500
                    });
            }else{
                    $.ajax({
                    url:'servicios/pedidos/confir.php',
                    type:'POST',
                    data:{
                        telusu:telusu
                    },
                    success:function(data){
                        console.log(data);
                        if(data.state){
                            Swal.fire({
                                title: "Debera Pagar y Mandar Mensaje Correspondiente",
                                icon: "success",
                                timer: 2500
                            });
                            setTimeout(() => {
                                window.location.href="pedido.php"
                            }, 2500);
                            
                        }else{
                            Swal.fire({
                                title: data.detail,
                                icon: "error",
                                timer: 2500
                            });
                        }
                    },
                    error:function(err){
                        console.error(err);
                    }
                });
            }
        }

    </script>
        <script >
            function procesar_compra1(){
                let telusu=$("#telusu").val();
            if(telusu==""){
                Swal.fire({
                        title: "Complete Los Campos",
                        icon: "error",
                        timer: 2500
                    });
            }else{
                var public_key="APP_USR-60d8bfa1-6007-4308-a5df-894c8939d714";
                const mp = new MercadoPago(public_key, {
                    locale: 'es-AR'
                });
                    const checkout = mp.checkout({
                    preference: {
                    id:'<?php echo $preference->id; ?>'
                    },
                    render: {
                    container:'.cho-container',
                        label:'Efectuar Pago Con MercadoPago',
                    }
                    
                });
            }
        }
            
            
            
        </script>
    
</body>

</html>

            
            