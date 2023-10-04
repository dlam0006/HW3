<h1>Buses</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Bus ID</th>
        <th>Name</th>
        <th>Capacity</th>
      </tr>
    </thead>
    <tbody>
  <?php
      while ($bus = $buses->fetch_assoc()) {
  ?>
     <tr>
       <td><?php echo $bus['bus_id']; ?></td>
        <td><?php echo $bus['bus_name']; ?></td>
       <td><?php echo $bus['capacity']; ?></td>
     </tr>     
  <?php
      }
  ?> 
    </tbody>
  </table>
</div>
