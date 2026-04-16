<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/SC-502-Ambiente-Web-Cliente-Servidor-CE02/Model/UtilitarioModel.php";

function ConsultarCasasModel()
{
    $context = OpenDataBase();
    
    $sp = "CALL sp_ConsultarCasas()";
    $result = $context->query($sp);

    CloseDataBase($context);
    return $result;
}

function ObtenerCasasDisponiblesModel()
{
    $context = OpenDataBase();

    $sp = "CALL sp_ObtenerCasasDisponibles()";
    $result = $context->query($sp);

    CloseDataBase($context);
    return $result;
}

function ObtenerCasaPorIdModel($IdCasa)
{
    $context = OpenDataBase();
    $IdCasa = intval($IdCasa);

    $sp = "CALL sp_ObtenerCasaPorId($IdCasa)";
    $result = $context->query($sp);

    if ($result != null && $result->num_rows > 0) {
        return $result->fetch_assoc();
    }

    CloseDataBase($context);
    return null;
}

function AlquilarCasaModel($IdCasa, $UsuarioAlquiler)
{
    $context = OpenDataBase();

    $IdCasa = intval($IdCasa);
    $UsuarioAlquiler = mysqli_real_escape_string($context, $UsuarioAlquiler);

    $sp = "CALL sp_AlquilarCasa($IdCasa, '$UsuarioAlquiler')";
    $result = $context->query($sp);

    CloseDataBase($context);
    return $result;
}