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
            ?>
          </p>
          <p class="card-text"><small class="text-body-secondary">Email: <?php echo $driver['email']; ?></small></p>
        </div>
      </div>
     <tr>
       <td><?php echo $driver['driver_id']; ?></td>
       <td><?php echo $driver['name']; ?></td>
       <td><?php echo $driver['email']; ?></td>
       <td><a href="buses-by-driver.php?id=<?php echo $driver['driver_id']; ?>">Buses</a></td>
     </tr>     
  <?php
  }
  ?> 
</div>
