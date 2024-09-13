<?php
session_start();
include("phptextClass.php");

/* Create class object */
$phptextObj = new phptextClass();
/* Generate image with text */
$phptextObj->phpcaptcha('#162453', '#fff', 120, 40, 0, 10);
?>
