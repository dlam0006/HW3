<h1>Drivers</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Driver ID</th>
        <th>Name</th>
        <th>Email</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
  <?php
      while ($driver = $drivers->fetch_assoc()) {
  ?>
     <tr>
       <td><?php echo $driver['driver_id']; ?></td>
       <td><?php echo $driver['name']; ?></td>
       <td><?php echo $driver['email']; ?></td>
       <td><a href="buses-by-driver.php?id=<?php echo $driver['driver_id']; ?>">Buses</a></td>
     </tr>     
  <?php
  }
  ?> 
    </tbody>
  </table>
</div>
