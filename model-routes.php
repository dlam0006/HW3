<?php
function selectRoutes() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT route_id, origin, destination FROM `Route`");
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
