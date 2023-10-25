<div>
  <div class="col">
    <h1>Buses</h1>
  </div>
  <div class="col-auto">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
      <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Bus ID</th>
        <th>Bus Name</th>
        <th>Capacity</th>
        <th></th>
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
       <td>
         <form method="post" action="shifts-by-bus.php">
           <input type="hidden" name="bid" value="<?php echo $bus['bus_id']; ?>">
            <button type="submit" class="btn btn-primary">Schedule</button>
          </form>
       </td>
     </tr>     
  <?php
      }
  ?> 
    </tbody>
  </table>
</div>
