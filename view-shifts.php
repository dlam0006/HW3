<h1>Shifts</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Shift_ID</th>
        <th>Driver_ID</th>
        <th>Bus_ID</th>
        <th>Shift Day</th>
        <th>Start Time</th>
        <th>End Time</th>
      </tr>
    </thead>
    <tbody>
  <?php
      while ($shift = $shifts->fetch_assoc()) {
  ?>
     <tr>
       <td><?php echo $shift['shift_id']; ?></td>
        <td><?php echo $shift['driver_id']; ?></td>
       <td><?php echo $shift['bus_id']; ?></td>
      <td><?php echo $shift['shift_day']; ?></td>
       <td><?php echo $shift['start_time']; ?></td>
        <td><?php echo $shift['end_time']; ?></td>
     </tr>     
  <?php
      }
  ?> 
    </tbody>
  </table>
</div>
