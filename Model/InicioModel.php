<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoProyectoAmbienteWeb/Model/UtilitarioModel.php';

    function RegistrarUsuarioModel($correoElectronico,$nombre,$contrasenna)
    {
        try
        {
            $conn = OpenDB();

            $sql = "CALL spRegistrarUsuario('$correoElectronico','$nombre','$contrasenna')";
            $response = $conn -> query($sql);

            CloseDB($conn);
            return $response;
        }
        catch(Exception $e)
        {
            AddError($e, 'RegistrarUsuarioModel', 0);
            return false;
        }
    }

    function IniciarSesionModel($correoElectronico,$contrasenna)
    {
        try
        {
            $conn = OpenDB();

            $sql = "CALL spIniciarSesionUsuario('$correoElectronico','$contrasenna')";
            $response = $conn -> query($sql);

            //Se guarda el resultado en una variable nueva
            $datos = null;
            while($fila = $response -> fetch_assoc())
            {
                $datos = $fila;
            }

            CloseDB($conn);
            return $datos;
        }
        catch(Exception $e)
        {
            AddError($e, 'IniciarSesionModel', 0);
            return null;
        }
    }

    function ValidarCorreoModel($correoElectronico)
    {
        try
        {
            $conn = OpenDB();

            $sql = "CALL spValidarCorreo('$correoElectronico')";
            $response = $conn -> query($sql);

            $datos = null;
            while($fila = $response -> fetch_assoc())
            {
                $datos = $fila;
            }

            CloseDB($conn);
            return $datos;
        }
        catch(Exception $e)
        {
            AddError($e, 'ValidarCorreoModel', 0);
            return null;
        }
    }