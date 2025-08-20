<?php

// Controladores
require_once "controllers/plantilla.controllers.php";
require_once "controllers/users.controllers.php";

// Modelos
require_once "models/users.models.php";

$plantilla = new ControllerPlantilla();
$plantilla->ctrPlantilla();
