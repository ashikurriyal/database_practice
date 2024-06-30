<?php
include 'db.php';

$sql = "SELECT c.* FROM Customer c
        JOIN Purchased_items p ON c.Customer_id = p.Customer_id
        WHERE p.Product_id IN (5, 6)";
$result = $conn->query($sql);

$customers = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $customers[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($customers);

$conn->close();
?>
