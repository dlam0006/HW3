<?php
require_once("util-db.php");
require_once("model-visualizations-db.php");
  
$pageTitle = "Visualizations";
include "view-header.php";
$drivers = selectDrivers();
$buses = selectBuses();
include "view-visualizations.php";
include "view-footer.php";
?>
