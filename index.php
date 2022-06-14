<?php

include "controllers/template.controller.php";
include "controllers/products.controller.php";
//include "controllers/sales.controller.php";

include "models/products.model.php";
//include "models/sales.model.php";

$template = new ControllerTemplate();
$template->ctrTemplate();