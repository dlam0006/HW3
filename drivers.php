<?php
require_once("util-db.php");
require_once("model-drivers.php");
  
$pageTitle = "Drivers";
include "view-header.php";
$drivers = selectDrivers();
include "view-drivers.php";
include "view-footer.php";
?>
