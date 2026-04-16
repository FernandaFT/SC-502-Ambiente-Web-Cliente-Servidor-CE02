<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/SC-502-Ambiente-Web-Cliente-Servidor-CE02/View/layoutExterno.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/SC-502-Ambiente-Web-Cliente-Servidor-CE02/Controller/CasasController.php";

$mensaje = AlquilarCasaController();
$casasDisponibles = ObtenerCasasDisponiblesController();
?>

<!DOCTYPE html>
<html lang="es">

<?php MostrarCSS(); ?>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel-body">

                <div class="content-wrapper d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                    <div class="main-panel w-100">
                        <?php MostrarHeader(); ?>

                        <div class="content-wrapper">

                            <div class="row justify-content-center mb-4">
                                <div class="col-md-8 col-lg-6">
                                    <div class="d-flex">
                                        <a href="consultar.php" class="btn btn-gradient-danger btn-rounded btn-fw">
                                            <i class="mdi mdi-arrow-left"></i>
                                            Ir a Consulta
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6">
                                    <?php if (!empty($mensaje)) { ?>
                                        <div class="alert alert-danger text-center">
                                            <?php echo $mensaje; ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6 grid-margin stretch-card">
                                    <div class="card bg-gradient-success card-img-holder shadow-lg">
                                        <div class="card-body">
                                            <img src="../assets/images/dashboard/circle.svg"
                                                class="card-img-absolute"
                                                alt="circle-image" />

                                            <h4 class="card-title text-center mb-4 text-white">
                                                Alquiler de Casas
                                            </h4>

                                            <form action="" method="POST" id="formAlquiler">

                                                <div class="form-group">
                                                    <label class="text-white"><strong>Casa</strong></label>
                                                    <select name="IdCasa" id="IdCasa" class="form-control" required>
                                                        <option value="">Seleccione una casa</option>
                                                        <?php if ($casasDisponibles != null && $casasDisponibles->num_rows > 0) { ?>
                                                            <?php while ($row = $casasDisponibles->fetch_assoc()) { ?>
                                                                <option value="<?php echo $row["IdCasa"]; ?>"
                                                                    data-precio="<?php echo $row["PrecioCasa"]; ?>">
                                                                    <?php echo htmlspecialchars($row["DescripcionCasa"]); ?>
                                                                </option>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label class="text-white"><strong>Precio mensual</strong></label>
                                                    <input type="text" name="PrecioCasaVista" id="PrecioCasaVista" class="form-control" readonly>
                                                </div>

                                                <div class="form-group">
                                                    <label class="text-white"><strong>Usuario alquiler</strong></label>
                                                    <input type="text" name="UsuarioAlquiler" id="UsuarioAlquiler" class="form-control" maxlength="30" required>
                                                </div>

                                                <div class="text-center mt-4">
                                                    <button type="submit" name="btnAlquilar" id="btnAlquilar" class="btn btn-gradient-danger btn-rounded btn-fw">
                                                        Alquilar
                                                    </button>
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <?php MostrarFooter(); ?>
            </div>
        </div>
    </div>

    <?php MostrarJS(); ?>
    <script src="../assets/funciones/casas.js"></script>
</body>

</html>