<?php
    session_start();
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
    <!--LOGO MAS NAVEGADOR-->
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
        <!--SECCION DE PRESENTACION DEL SITIO-->
        <section>
            <div class="row position-relative">
                <div class="col-12 p-0">
                    <h1 class="titulo m-2 text-center title_index">"La risa es como el postre, para ella siempre hay
                        hueco"
                    </h1>
                    <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item fondos-index imag_Index_1 active"></div>
                            <div class="carousel-item fondos-index imag_Index_2"></div>
                            <div class="carousel-item fondos-index imag_Index_3"></div>
                            <div class="carousel-item fondos-index imag_Index_4"></div>
                            <div class="carousel-item fondos-index imag_Index_5"></div>
                            <div class="carousel-item fondos-index imag_Index_6"></div>

                        </div>
                        <button class=" boton carousel-control-prev" type="button"
                            data-target="#carouselExampleControls" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden"></span>
                        </button>
                        <button class="boton carousel-control-next " type="button"
                            data-target="#carouselExampleControls" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden"></span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </article>
    <article>
        <section>
            <!--SECCION DE IDENTIDAD-->
            <div class="row justify-content-center caja">

                <div class="col-12 col-md-4">
                    <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <img src="imagen/conoceme01.jpg" class="img-fluid rounded-circle" alt="conoceme01">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <p class="texto text-justify m-0 p-0">
                    <h2 class="subtitulo m-2 pt-1">Quién soy?</h2>
                    <span class="quien_soy"> Me encanta hornear y encontrar la perfección en lo que hago, siempre desde
                        el amor y la
                        creatividad. Me gusta los desafios y los nuevos retos. Espero que puedas conocerme en mi pequeño
                        mundo de la repostería.</span>

                </div>

            </div>
    </article>
    <article>
        <section>
            <!--SECCION DE PRODUCTOS MAS VENDIDOS-->
            <div class="row">
                <div class="col-12">
                    <div class="contai">
                        <div class="box">
                            <img src="imagen/Tfrutillas.jpg" alt="frutilla">

                        </div>
                        <div class="box">
                            <img src="imagen/Tartaches.jpg" alt="tarta">

                        </div>
                        <div class="box">
                            <img src="imagen/Tartas.jpg" alt="tarta1">

                        </div>
                        <div class="box">
                            <img src="imagen/Brownie02.jpg" alt="brownie2">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-3 m-5">
                        <a href="productos.php" class="link">
                            <span class="mask">
                                <div class="link-container ">
                                    <span class="link-title1 title">Ver Más</span>
                                    <span class="link-title2 title">Ver Más</span>
                                </div>
                            </span>
                            <div class="link-icon">
                                <svg class="icon" width="24" height="24" xmlns="http://www.w3.org/2000/svg"
                                    fill-rule="evenodd" clip-rule="evenodd">
                                    <path
                                        d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z" />
                                </svg>
                                <svg class="icon" width="24" height="24" xmlns="http://www.w3.org/2000/svg"
                                    fill-rule="evenodd" clip-rule="evenodd">
                                    <path
                                        d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z" />
                                </svg>
                            </div>
                        </a>
                    </div>
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
        crossorigin="anonymous">
    </script>
    <!--SCRIPT DE AOS-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
</body>

</html>