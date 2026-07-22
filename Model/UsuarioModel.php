<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoProyectoAmbienteWeb/Model/UtilitarioModel.php';

    function ActualizarPerfilModel($consecutivo, $nombre, $correoElectronico)
    {
        try
        {
            $conn = OpenDB();

            $sql = "CALL spActualizarPerfil('$consecutivo', '$nombre', '$correoElectronico')";
            $response = $conn -> query($sql);

            CloseDB($conn);
            return $response;
        }
        catch(Exception $e)
        {
            AddError($e, 'ActualizarPerfilModel', 0);
            return false;
        }
    }

    function ActualizarContrasennaModel($consecutivo, $nuevaContrasenna)
    {
        try
        {
            $conn = OpenDB();

            $sql = "CALL spActualizarContrasenna('$consecutivo', '$nuevaContrasenna')";
            $response = $conn -> query($sql);

            CloseDB($conn);
            return $response;
        }
        catch(Exception $e)
        {
            AddError($e, 'ActualizarContrasennaModel', 0);
            return false;
        }
    }

    function ConsultarUsuarioModel($consecutivo)
    {
        try
        {
            $conn = OpenDB();

            $sql = "CALL spConsultarUsuario('$consecutivo')";
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
            AddError($e, 'ConsultarUsuarioModel', 0);
            return null;
        }
    }
?>
