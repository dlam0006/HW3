<?php
require_once("util-db.php");
require_once("model-drivers-with-shifts.php");
require_once("model-routes.php");

$pageTitle = "Drivers with Shifts";
include "view-header.php";
$drivers = selectDrivers();
include "view-drivers-with-shifts.php";
include "view-footer.php";
?>
