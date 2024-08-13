<?php
require_once (__DIR__ . '/../../database/connection.php');

// Check if the request is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $employeeId = $_POST['id'];
    $newStatus = $_POST['status'];
    $statusValue = ($newStatus === 'Activate') ? 1 : 0;
    $query = "UPDATE employees SET employee_status = ? WHERE id = ?";
    $stmt = $con->prepare($query);

    $stmt->bind_param("ii", $statusValue, $employeeId);

    $statusValue = ($newStatus === 'Activate') ? 1 : 0;
    if ($stmt->execute()) {
        echo json_encode([
            'success' => true,
            'message' => 'Employee status updated successfully ' . $statusValue .''
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => $stmt->error]);
    }
    $stmt->close();
}
?>
