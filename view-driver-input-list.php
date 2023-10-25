<select class="form-select" id="did" name="did">
  <?php
    while ($DriverItem = $driverList->fetch_assoc()) {
  ?>
  <option value="<?php echo $DriverItem['driver_id']; ?>"><?php echo $DriverItem['name']; ?></option>
  <?php
  }
  ?>
</select>
