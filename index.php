<?php
$pageTitle = "Home";
include "view-header.php";
?>

<style>
    body {
        background-color: #f0f8ff;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    img {
        max-width: 100%;
        height: auto;
    }

    h1, h2, h4 {
        color: #333;
        text-align: center;
    }

    p {
        color: #555;
    }
</style>

<div class="container">

    <div style="margin-top: 20px;">
        <h2>Bellah Buses Resource Planning System</h2>
            <div style="text-align: center; margin-top: 20px;">
                <img src="Logo.png" alt="Bus Transportation Image">
            </div>
        <p>This platform serves as a comprehensive database for a bus transportation company, facilitating efficient resource planning and management.</p>

        <h4>Site Naviagtion</h4>
        <p>This database comprises several tabs, each dedicated to a specific aspect of the transportation operations:</p>

        <ol>
            <li><strong>Drivers:</strong> Displays information about drivers, the buses they operate, and their schedules.</li>
            <li><strong>Buses:</strong> Provides details about buses and their working schedules.</li>
            <li><strong>Drivers with Shifts:</strong> Shows drivers, their shifts, and the routes they take during each shift.</li>
            <li><strong>Employees Weekly Pay:</strong> Calculates the hours each employee works per week and determines their pay.</li>
            <li><strong>Routes Driven Before Refueling:</strong> Estimates the number of routes a driver can take before needing to refuel.</li>
            <li><strong>Route Map:</strong> Displays an overview map of the stops on the routes.</li>
        </ol>

    </div>
</div>

<?php
include "view-footer.php";
?>
