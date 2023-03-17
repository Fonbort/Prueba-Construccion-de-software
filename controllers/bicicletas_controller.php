<?php
    require_once("../models/bicicletas_model.php");
    $services = new Service();
    $datos = $services->getServicios();
    require_once("../views/bicicletas_views.php");
?>
