<?php
require_once("util-db.php");
require_once("model-visualizations.php");
  
$pageTitle = "Visualizations";
include "view-header.php";
$drivers = selectDrivers();
include "view-visualizations.php";
include "view-footer.php";
?>
