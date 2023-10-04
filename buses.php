<?php
require_once("util-db.php");
require_once("model-buses.php");
  
$pageTitle = "Buses";
include "view-header.php";
$drivers = selectBuses();
include "view-footer.php";
?>
