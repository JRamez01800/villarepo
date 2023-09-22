<?php session_start();
    include "../../clases/Auth.php";
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $Auth = new Auth();

    if ($Auth->logear($usuario, $password)) {
        header("location:../../servicios.php");
    } else {
        //header("location:../../index.php");
        echo '<script language="javascript">alert("Verifica Tus Credenciales");window.location.href="../../inicio.php"</script>';
    }

?>