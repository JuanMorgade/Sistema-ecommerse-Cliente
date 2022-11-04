<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
         
            <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
            <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">    
        <!--SCRIPT DE INSTAGRAM-->
        <script async src="https://www.instagram.com/embed.js"></script>
        <!--<link rel="stylesheet" href="../css/estilo.css">-->
        <link rel="stylesheet" href="css/style.css">
        <title>CZ- Cursos</title>
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
                <h2 class="subtitulo mt-5 text-center">Comprar Curso de Alfajores</h2>
                <br><br>
            </div>
        </section>

        <section class="compra_curso">
            <div class="info_c">
                <h3>CURSO: DE ALFAJORES</h3>
                <p><em>En su versión más simple son dos galletas dulces pegadas con dulce de leche, que pueden tener diferentes coberturas o ingredientes.</em></p>
                
                <div class="grid__imagen">
                    <div>
                        <img class="imagen_curso" src="./imagen/alf01.jpg" alt="">
                    </div>
                    <div>
                        <img class="imagen_curso" src="./imagen/Alf02.jpg" alt="">
                    </div>
                    <div>
                        <img class="imagen_curso" src="./imagen/alfa3.jpg" alt="">
                    </div>
                </div>
                <p><u>El Curso Cuenta Con</u> : Receta y video del bizcochuelo de vainilla, Receta y video del buttercream de merengue suizo, Videos paso a paso: cómo hornear, rellenar, cubrir y alisar, Receta y paso a paso del efecto drip o goteo, Los mejores rellenos para tus alfajores (guía paso a paso en Zoom).</p>
                <p>Por el modico precio de: $2750</p>
                
                <button onclick="iniciar_compra()" class="botonn">Comprar</button>
                <div id="disqus_thread"></div>
                    <script>
                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://sistema-ecommerce.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>    
            </div>
            
        </section>
    </article>
    <article>
        <section class="cake_body">
            <div class="container">

            <div class="card border-0">
                    <figure class="card__thumb mb-0 rounded">
                        <img src="./imagen/productos_view/alf03_383x510.jpg" alt="alfajores01" class="card__image">
                        <figcaption class="card__caption">
                            <h2 class="card__title">Alfajores</h2>
                            
                        </figcaption>
                    </figure>
                </div>
                
                <div class="card border-0">
                    <figure class="card__thumb mb-0 rounded">
                        <img src="./imagen/productos_view/alf05_595x510.jpg" alt="alfajores02" class="card__image">
                        <figcaption class="card__caption">
                            <h2 class="card__title">Mix de Alfajores</h2>
                            
                        </figcaption>
                    </figure>
                </div>

                <div class="card border-0">
                    <figure class="card__thumb mb-0 rounded">
                        <img src="./imagen/productos_view/alfajores_341x510.jpeg" alt="alfajores03"
                            class="card__image">
                        <figcaption class="card__caption">
                            <h2 class="card__title">Alfajores Artesanales</h2>
                            
                        </figcaption>
                    </figure>
                </div>        

            </div>
        </section>
    </article>



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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
    <!--SCRIPT DE INSTAGRAM-->
    <script async src="https://www.instagram.com/embed.js"></script>

    <script
          src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        var p = 3;
    </script>

    <script type="text/javascript">
        function iniciar_compra(){
			$.ajax({
				url:'servicios/compra/validar_inicio_compra.php',
				type:'POST',
				data:{
					codpro:p
                    
				},
				success:function(data){
					console.log(data);
					if (data.state) {
                        Swal.fire({
                            title: data.detail,
                            icon: "success",
                            timer: 2500
                        });
						
					}else{
                        Swal.fire({
                            title: data.detail,
                            icon: "error"
						});
                        setTimeout(() => {
                            if (data.open_login) {
							open_login();
                        }	
                        }, 2500);
                        
					}
				},
				error:function(err){
				console.error(err);
                }
				
			});
		}

        function open_login(){
			window.location.href="login.php";
		} 
    </script>


</body>
</html>