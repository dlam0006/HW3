<?php
function selectBuses() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT bus_id, bus_name, capacity FROM `Bus`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertBuses() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT bus_id, bus_name, capacity FROM `Bus`");
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
