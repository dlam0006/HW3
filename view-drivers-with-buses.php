<h1>Drivers with Buses</h1>
<div class="card-group">
  <?php
      while ($driver = $drivers->fetch_assoc()) {
  ?>
     <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php echo $driver['name']; ?></h5>
          <p class="card-text">
            <?php
              $buses = selectBusesByDriver($driver['driver_id']);
              while ($bus = $buses->fetch_assoc()) {
            ?>
                
            <?php   
              }
           ?>
          </p>
          <p class="card-text"><small class="text-body-secondary">Email: <?php echo $driver['email']; ?></small></p>
        </div>
      </div>
  <?php
  }
  ?> 
</div>
