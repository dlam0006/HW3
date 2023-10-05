<h1>Trips</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Trip ID</th>
        <th>Trip Name</th>
        <th>Origin</th>
        <th>Destination</th>
      </tr>
    </thead>
    <tbody>
  <?php
      while ($trips = $trips->fetch_assoc()) {
  ?>
     <tr>
       <td><?php echo $trips['trip_id']; ?></td>
        <td><?php echo $trips['trip_name']; ?></td>
       <td><?php echo $trips['origin']; ?></td>
        <td><?php echo $trips['destination']; ?></td>
     </tr>     
  <?php
      }
  ?> 
    </tbody>
  </table>
</div>
