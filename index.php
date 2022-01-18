<?php
ob_start();
require_once'mvc/controller/HomeController.php';
$SanphamController = new SanphamController();
$SanphamController->dieuhuong();
ob_flush();
?>