<?php
function selectShifts() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT shift_id, driver_id, bus_id, shift_day, start_time, end_time FROM `Shift`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
