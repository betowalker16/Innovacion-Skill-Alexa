<?php
session_set_cookie_params(3600);
session_start();
$_SESSION['usuario'] = '';
session_destroy();
header("Location: ../login.php"); // Redireccionar a la página de inicio de sesión
exit();


?>