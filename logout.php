<?php
session_start();
session_unset();
session_destroy();
header("Location: hlavni-strana.php");
exit();
?>