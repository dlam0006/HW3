<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Driver_ID</th>
        <th>Name</th>
        <th>Email</th>
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
     </tr>     
  <?php
      }
  ?> 
    </tbody>
  </table>
</div>
