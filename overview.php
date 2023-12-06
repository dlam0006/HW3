<?php
require_once("util-db.php");
require_once("model-overview-db.php");
  
$pageTitle = "Overview";
include "view-header.php";
$drivers = selectDrivers();
$buses = selectBuses();
$routes = selectRoutes();
$days = selectDays();
include "view-overview.php";
include "view-footer.php";
?>
