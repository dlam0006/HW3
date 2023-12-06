<?php
$pageTitle = "Home";
include "view-header.php";
include "css.php";
?>

<div class="container">

    <div style="margin-top: 20px;">
        <h2>Bellah Buses Management System</h2>
            <div style="text-align: center; margin-top: 20px;">
                <img src="Logo.png" alt="Bus Transportation Image">
            </div>
        
        <h4>Site Naviagtion</h4>
        <p>This platform serves as a comprehensive database for a bus transportation company, facilitating efficient resource planning and management.</p>
        <p>This database comprises several tabs, each dedicated to a specific aspect of the transportation operations:</p>

        <ul>
            <li><strong>Drivers:</strong> Displays information about drivers, the buses they operate, and their schedules.</li>
            <li><strong>Buses:</strong> Provides details about buses and their working schedules.</li>
            <li><strong>Shifts & Routes:</strong> Shows shift information and calculate costs.</li>
            <li><strong>Overview:</strong> Shows visualizations for resource usage.</li>
        </ul>

    </div>
</div>

<?php
include "view-footer.php";
?>
