<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/SC-502-Ambiente-Web-Cliente-Servidor-CE02/View/layoutExterno.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/SC-502-Ambiente-Web-Cliente-Servidor-CE02/Controller/CasasController.php";

$casas = ConsultarCasasController();
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
                                <div class="col-md-10 col-lg-10">
                                    <div class="d-flex">
                                        <a href="inicio.php" class="btn btn-gradient-danger btn-rounded btn-fw">
                                            <i class="mdi mdi-arrow-left"></i>
                                            Ir al Inicio
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-10 grid-margin stretch-card">
                                    <div class="card bg-gradient-info card-img-holder shadow-lg">
                                        <div class="card-body text-center">
                                            <img src="../assets/images/dashboard/circle.svg"
                                                class="card-img-absolute"
                                                alt="circle-image" />

                                            <h4 class="card-title text-center mb-4 text-white">
                                                Consulta de Casas
                                            </h4>

                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>Descripción</th>
                                                            <th>Precio</th>
                                                            <th>Usuario</th>
                                                            <th>Estado</th>
                                                            <th>Fecha</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if ($casas != null && $casas->num_rows > 0) { ?>
                                                            <?php while ($row = $casas->fetch_assoc()) { ?>
                                                                <tr>
                                                                    <td><?php echo htmlspecialchars($row["DescripcionCasa"]); ?></td>
                                                                    <td>₡<?php echo number_format($row["PrecioCasa"], 2); ?></td>
                                                                    <td>
                                                                        <?php
                                                                        echo !empty($row["UsuarioAlquiler"])
                                                                            ? htmlspecialchars($row["UsuarioAlquiler"])
                                                                            : "Sin asignar";
                                                                        ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php if ($row["Estado"] == "Disponible") { ?>
                                                                            <label class="badge badge-success">
                                                                                <?php echo htmlspecialchars($row["Estado"]); ?>
                                                                            </label>
                                                                        <?php } else { ?>
                                                                            <label class="badge badge-warning">
                                                                                <?php echo htmlspecialchars($row["Estado"]); ?>
                                                                            </label>
                                                                        <?php } ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        echo !empty($row["FechaAlquiler"])
                                                                            ? htmlspecialchars($row["FechaAlquiler"])
                                                                            : "Sin fecha";
                                                                        ?>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>
                                                        <?php } else { ?>
                                                            <tr>
                                                                <td colspan="5">No hay casas disponibles para mostrar</td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>

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
</body>

</html>