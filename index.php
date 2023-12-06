<?php
$pageTitle = "Home";
include "view-header.php";
include "css.php";
?>

<div class="container">

    <div style="margin-top: 20px;">
        <h2>Bellah Buses Resource Planning System</h2>
            <div style="text-align: center; margin-top: 20px;">
                <img src="Logo.png" alt="Bus Transportation Image">
            </div>
        
        <h4>Site Naviagtion</h4>
        <p>This platform serves as a comprehensive database for a bus transportation company, facilitating efficient resource planning and management.</p>
        <p>This database comprises several tabs, each dedicated to a specific aspect of the transportation operations:</p>

        <ul>
            <li><strong>Drivers:</strong> Displays information about drivers, the buses they operate, and their schedules.</li>
            <li><strong>Buses:</strong> Provides details about buses and their working schedules.</li>
            <li><strong>Drivers with Shifts:</strong> Shows drivers, their shifts, and the routes they take during each shift.</li>
            <li><strong>Employees Weekly Pay:</strong> Calculates the hours each employee works per week and determines their pay.</li>
            <li><strong>Routes & Refueling:</strong> Estimates the number of routes a driver can take before needing to refuel.</li>
            <li><strong>Route Map:</strong> Displays an overview map of the stops on the routes.</li>
        </ul>

    </div>
</div>

<?php
include "view-footer.php";
?>
