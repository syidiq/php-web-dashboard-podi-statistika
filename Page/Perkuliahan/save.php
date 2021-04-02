<?php
session_start();
$_SESSION = []; 
session_unset();
session_destroy();

$ni = '1';
$nim = $_POST["nim_A"];
header("Location: index.php?page=Perkuliahan");
exit;
?>