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

function insertBuses($bName, $bCapacity) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Bus` (`bus_name`, `capacity`) VALUES (?, ?)");
        $stmt->bind_param("ss", $bName, $bCapacity);
        $success = $stmt->execute();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateBuses($bName, $bCapacity, $bid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Bus` set `bus_name` = ?, `capacity` where bus_id = ?");
        $stmt->bind_param("ssi", $bName, $bCapacity, $bid);
        $success = $stmt->execute();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteBuses($bid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from `Bus` where bus_id = ?");
        $stmt->bind_param("i", $bid);
        $success = $stmt->execute();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
