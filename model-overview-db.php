<?php
function selectDrivers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT name, count(s.shift_id) as num_shifts FROM `Driver` d join `Shift` s on d.driver_id = s.driver_id group by name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectBuses() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT bus_name, count(s.shift_id) as num_shifts FROM `Bus` b join `Shift` s on b.bus_id = s.bus_id group by bus_name");
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
