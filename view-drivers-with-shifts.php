<h1>Drivers with Shifts</h1>
<div class="card-group">
  <?php
      while ($driver = $drivers->fetch_assoc()) {
  ?>
     <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php echo $driver['name']; ?></h5>
          <p class="card-text">
            <ul class="list-group">
            <?php
              $buses = selectBusesByDriver($driver['driver_id']);
              while ($bus = $buses->fetch_assoc()) {
            ?>
                <li class="list-group-item"><?php echo $bus['shift_days']; ?> - <?php echo $bus['start_time']; ?> - <?php echo $bus['end_time']; ?> - <?php echo $bus['bus_name']; ?> - Route <?php echo $bus['route_id']; ?></li>

            <?php   
              }
           ?>
            </ul>
          </p>
          <p class="card-text"><small class="text-body-secondary">Email: <?php echo $driver['email']; ?></small></p>
        </div>
      </div>
  <?php
  }
  ?> 
</div>

<br /><br /><br />

<h3>Route Refernece</h3>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Route Number</th>
        <th>Origin</th>
        <th>Destination</th>
      </tr>
    </thead>
    <tbody>
  <?php
      while ($bus = $buses->fetch_assoc()) {
  ?>
     <tr>
       <td><?php echo $bus['route_id']; ?></td>
       <td><?php echo $bus['origin']; ?></td>
       <td><?php echo $bus['destination']; ?></td>
     </tr>     
  <?php
      }
  ?> 
    </tbody>
  </table>
</div>
