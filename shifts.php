<?php
require_once("util-db.php");
require_once("model-shifts.php");
  
$pageTitle = "Shifts";
include "view-header.php";
$drivers = selectShifts();
include "view-shifts.php";
include "view-footer.php";
?>
