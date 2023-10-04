<?php
require_once("util-db.php");
require_once("model-buses.php");
  
$pageTitle = "Buses";
include "view-header.php";
$buses = selectBuses();
include "view-buses.php";
include "view-footer.php";
?>
