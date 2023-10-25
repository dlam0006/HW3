<?php
require_once("util-db.php");
require_once("model-drivers-with-shifts.php");
require_once("model-routes.php");

$pageTitle = "Drivers with Shifts";
include "view-header.php";
$drivers = selectDrivers();
$routes = selectRoutes();
include "view-drivers-with-shifts.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            if (insertRoutes($_POST['rOrigin'], $_POST['rDestination'])) {
                echo '<div class="alert alert-success" role="alert">Route Added.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error.</div>';
            }
            break;
        case "Edit":
            if (updateRoutes($_POST['rOrigin'], $_POST['rDestination'], $_POST['rid'])) {
                echo '<div class="alert alert-success" role="alert">Route Edited.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error.</div>';
            }
            break;
        case "Delete":
            if (deleteRoutes($_POST['rid'])) {
                echo '<div class="alert alert-success" role="alert">Route Deleted.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error.</div>';
            }
            break;
    }
}

include "view-footer.php";
?>
