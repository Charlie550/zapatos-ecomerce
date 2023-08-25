<?php
include("../../utilities/Constants.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo TITULO ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../../assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">

    <style>
        .zoom {
            transition: transform .2s;
            cursor: pointer;
        }

        .zoom:hover {
            transform: scale(1.5);
        }
    </style>

</head>

<body>

    <?php include_once("../shared/header.php"); ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Contáctanos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="../home/home.php">Inicio</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active" aria-current="page">Contacto</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">¿Dónde nos ubicamos?</p>
                    <h1 class="display-5 mb-4">Si tienes alguna duda, no dudes en escribirnos</h1>
                    <p class="mb-4">Compártenos tus datos y nos pondremos en contacto contigo lo antes posible.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Tu nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Tu correo</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Asunto</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Mensaje</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div id="contenedor_envio"></div>
                                <button class="btn btn-primary py-3 px-5" id="btn_enviar_mensaje">Enviar correo</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100" style="margin-top: 25%;">
                        <a title="¿Cómo llegar?" href="https://www.google.com.mx/maps/dir//C.+Toscana+106,+Real+de+los+Naranjos,+37210+Le%C3%B3n,+Gto./@21.1632358,-101.6900533,13.5z/data=!4m9!4m8!1m0!1m5!1m1!1s0x842bbeb4fe20d117:0x9e557671e037e217!2m2!1d-101.635811!2d21.1641592!3e0?entry=ttu" target="_blank">
                            <img class="zoom img-fluid rounded" src="../../assets/img/map.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <?php include_once("../shared/footer.php"); ?>



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/lib/wow/wow.min.js"></script>
    <script src="../../assets/lib/easing/easing.min.js"></script>
    <script src="../../assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../../assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../assets/lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="../../js/main.js"></script>

    <script>
        $(document).ready(function() {

            $("#btn_enviar_mensaje").on("click", function(e) {
                e.preventDefault();

                if ($("#name").val() == "" || $("#message").val() == "" || $("#email").val() == "" || $("#subject").val() == "") {
                    alert("Favor de llenar la información primero");
                    return false;
                }

                var mensaje = "Hola, me llamo" + $("#name").val() + "<br><br>";
                mensaje += "Te escribo desde tu página web para comentarte: <br>" + $("#message").val();
                mensaje += "<br><br><br>Favor de contactarme a mi correo personal: " + $("#email").val();

                window.location.href= "mailto:destinatario@example.com?subject=" + $('#subject').val() + "&body=" + mensaje;
                
            });

        });
    </script>

</body>

</html>