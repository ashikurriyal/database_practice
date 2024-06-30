<?php
include 'db.php';

$sql = "UPDATE Product_Info SET Stock = 15 WHERE Price < 500";
if ($conn->query($sql) === TRUE) {
    $response = array("status" => "success", "message" => "Stock updated successfully");
} else {
    $response = array("status" => "error", "message" => "Error updating stock: " . $conn->error);
}

header('Content-Type: application/json');
echo json_encode($response);

$conn->close();
?>
