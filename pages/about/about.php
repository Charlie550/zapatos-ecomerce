<?php
include("../../utilities/Constants.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>
        <?php echo TITULO ?>
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../../assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

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

</head>

<body>

    <?php include_once("../shared/header.php"); ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Sobre nosotros</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="../home/home.php">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="#">Páginas</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sobre nosotros</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <?php include_once("start.php"); ?>


    <?php include_once("facts.php"); ?>


    <!-- History Start -->
    <div class="container-xxl feature py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Un vistazo al pasado</p>
                <h1 class="display-5 mb-5">Conoce nuestra historia</h1>
            </div>

            <div class="row g-5 align-items-center">

                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="../../assets/img/history.jpg" alt="">
                </div>

                <div class="col-lg-7 wow fadeInDown" data-wow-delay="0.1s">
                    <h5 style="width:100%; font-weight:normal; text-align:justify;">
                        GarZer comienza hace 20 años con la idea de...<br><br>
                        En la ficha Insertar, las galerías incluyen elementos diseñados para coordinar con la apariencia
                        general del documento. <br><br>
                        Puede utilizar estas galerías para insertar tablas, encabezados, pies de página, listas,
                        portadas y otros bloques de creación del documento. Cuando crea imágenes, organigramas o
                        diagramas, también se coordinan con la apariencia actual de su documento.<br><br>
                        Puede cambiar fácilmente el formato del texto seleccionado en el documento eligiendo una
                        apariencia para el texto seleccionado desde la galería de Estilos rápidos de la ficha Inicio.
                    </h5>
                </div>

            </div>

        </div>
    </div>
    <!-- History Ends -->



    <!-- Galery Start -->
    <!-- Galery End -->



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

</body>

</html>