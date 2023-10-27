<select class="form-select" id="did" name="did">
  <?php
    while ($BusItem = $busList->fetch_assoc()) {
      $selText = "";
      if ($selectedBus == $BusItem['bus_id']) {
        $selText = " selected";
      }
  ?>
  <option value="<?php echo $BusItem['bus_id']; ?>"<?=$selText?>><?php echo $BusItem['bus_name']; ?></option>
  <?php
  }
  ?>
</select>
