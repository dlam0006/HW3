<div class="row">
  <div class="col">
    <h1>Buses</h1>
  </div>
  <div class="col-auto">
    <?php
    include "view-buses-newform.php";
    ?>
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
