<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/SC-502-Ambiente-Web-Cliente-Servidor-CE02/View/layout.php";
?>
<!DOCTYPE html>
<html lang="en">

<?php
MostrarCSS();
?>

<body>
    <div class="container-scroller">

        <div class="container-fluid page-body-wrapper">

            <div class="main-panel-body">
                <div class="content-wrapper">
                    <?php
                    MostrarHeader();
                    ?>
                    <div class="row row-altura d-flex justify-content-center gap-3">
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-info card-img-holder text-white">
                                <div class="card-body">
                                    <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">
                                        Consulta de Casas <i class="mdi mdi-home-search mdi-24px float-end"></i>
                                    </h4>
                                    <p class="mb-5">Visualiza las casas disponibles y reservadas del sistema,
                                                    filtradas por precio y ordenadas por disponibilidad.</p>
                                    <a href="consultar.php"
                                        class="btn btn-gradient-danger btn-rounded btn-fw">
                                        Ver Casas
                                        <i class="mdi mdi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-success card-img-holder text-white">
                                <div class="card-body">
                                    <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">
                                        Alquiler de Casa <i class="mdi mdi-key-variant mdi-24px float-end"></i>
                                    </h4>
                                    <p class="mb-5"> Registra el alquiler de una casa disponible,
                                                     asignando el usuario y actualizando su estado automáticamente.</p>
                                    <a href="alquilar.php"
                                        class="btn btn-gradient-danger btn-rounded btn-fw">
                                        Alquilar Casa
                                        <i class="mdi mdi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                MostrarFooter();
                ?>

            </div>
        </div>
    </div>

    <?php
    MostrarJS();
    ?>

</body>
</html>