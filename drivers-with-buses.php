<?php
require_once("util-db.php");
require_once("model-drivers-with-buses.php");
  
$pageTitle = "Drivers with Buses";
include "view-header.php";
$drivers = selectDrivers();
include "view-drivers-with-buses.php";
include "view-footer.php";
?>
