<?php

require_once '../entidades/tbl_productos.php';
require_once '../datos/dt_tbl_productos.php';
require_once '../controladores/productoController.php';

if (isset($_POST['m'])) {
    $metodo = $_POST['m'];
    if (method_exists("productoController", $metodo)) {
        productoController::{$metodo}();
    }
}

require_once '../entidades/tbl_comunidad.php';
require_once '../datos/dt_tbl_comunidad.php';
require_once '../controladores/comunidadController.php';

$tbc = new tbl_comunidad();
$dtc = new dt_tbl_comunidad();
$cc = new comunidadController();

if (isset($_POST['m'])) {
    $metodo = $_POST['m'];
    if (method_exists("comunidadController", $metodo)) {
        comunidadController::{$metodo}();
    }
}

require_once '../entidades/tbl_categoria_productos.php';
require_once '../datos/dt_tbl_categoriaProducto.php';
require_once '../controladores/categoriaProductoController.php';

$tu = new tbl_categoria_producto();
$dtcp = new dt_tbl_categoriaProducto();
$cp = new categoriaProductoController();

if (isset($_POST['m'])) {
    $metodo = $_POST['m'];
    if (method_exists("categoriaController", $metodo)) {
        categoriaProductoController::{$metodo}();
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Kermes Project</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/kermesse_favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="#" class="logo d-flex align-items-center">
                <img src="assets/img/kermesse_logo.png" alt="">
                <span class="d-none d-lg-block">Kermes Project</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/profile_icon.png" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Team Quickie</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Team Quickie</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="perfil.php">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="perfil.php">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php
    include("shared/navbar.php");
    ?>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Agregar Producto</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Productos</li>
                    <li class="breadcrumb-item active">Agregar Productos</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <!-- Formulario para agregar Usuario-->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Agregar Datos del Producto</h5>

                    <!-- Floating Labels Form -->
                    <form class="row g-3" method="POST">
                        <div class="col-md-12">
                            <input type="hidden" value="guardar" name="txtaccion" />
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingName" placeholder="Your Name"
                                    name="nombre">
                                <label for="floatingName">Nombre</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Address" id="floatingTextarea"
                                    style="height: 100px;" name="descripcion"></textarea>
                                <label for="floatingTextarea">Descripción</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingCity" placeholder="City"
                                        name="preciov_sugerido">
                                    <label for="floatingCity">Precio</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingZip" placeholder="Zip"
                                        name="cantidad">
                                    <label for="floatingZip">Cantidad</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <select class="form-control" id="idCatProducto" name="idCatProducto"
                                        placeholder="Zip">
                                        <option selected>Selecciona Una Categoria</option>
                                        <?php
                                        foreach ($dtcp->listarCategoriaProdcuto() as $r) :
                                        ?>
                                        <option>
                                            <?php echo $r->getId_categoria_producto(); ?>&nbsp;<?php echo $r->getNombre(); ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="floatingSelect">Categoria</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <select class="form-control" id="idComunidad" name="idComunidad" placeholder="Zip">
                                        <option selected>Selecciona Una Comunidad</option>
                                        <?php
                                        foreach ($dtc->listarComunidad() as $r) :
                                        ?>
                                        <option>
                                            <?php echo $r->getIdComunidad(); ?>&nbsp;<?php echo $r->getNombre(); ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="floatingSelect">Comunidad</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-outline-primary">Agregar Producto</button>
                            <input type="hidden" name="m" value="guardarProducto">

                        </div>
                    </form>
                    <!-- End floating Labels Form -->

        </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php
    include("shared/footer.php");
    ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>