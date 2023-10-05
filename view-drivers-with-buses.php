<h1>Tour Drivers with Buses</h1>
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
                <li class="list-group-item"><?php echo $bus['bus_name']; ?> - <?php echo $bus['capacity']; ?> - <?php echo $bus['shift_days']; ?> - <?php echo $bus['start_time']; ?> - <?php echo $bus['end_time']; ?></li>

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
