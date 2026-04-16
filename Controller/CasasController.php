<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/SC-502-Ambiente-Web-Cliente-Servidor-CE02/Model/CasasModel.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function ConsultarCasasController()
{
    return ConsultarCasasModel();
}

function ObtenerCasasDisponiblesController()
{
    return ObtenerCasasDisponiblesModel();
}

function ObtenerCasaPorIdController($IdCasa)
{
    return ObtenerCasaPorIdModel($IdCasa);
}

function AlquilarCasaController()
{
    if (isset($_POST["btnAlquilar"])) {
        $IdCasa = $_POST["IdCasa"];
        $UsuarioAlquiler = trim($_POST["UsuarioAlquiler"]);

        if (empty($IdCasa) || empty($UsuarioAlquiler)) {
            return "Debe completar todos los campos.";
        }

        $respuesta = AlquilarCasaModel($IdCasa, $UsuarioAlquiler);

        if ($respuesta) {
            header("Location: consultar.php");
            exit();
        } else {
            return "No fue posible registrar el alquiler.";
        }
    }

    return "";
}