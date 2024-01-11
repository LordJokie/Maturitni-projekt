<?php
session_start();
session_unset();
session_destroy();
$redirect_url = isset($_GET['redirect']) ? $_GET['redirect'] : 'hlavni-strana.php';
header("Location: $redirect_url");
exit();
?>