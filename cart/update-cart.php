<?php
	require 'config.php';
// Get the product ID and new quantity from the AJAX request
$pid = $_POST['pid'];
$qty = $_POST['qty'];

// Update the quantity and total price of the item in the cart table
$stmt = $conn->prepare('UPDATE cart SET qty = ?, total_price = (qty * product_price) WHERE id = ?');
$stmt->bind_param('ii', $qty, $pid);
$stmt->execute();

// Get the updated total price of the item
$stmt = $conn->prepare('SELECT total_price FROM cart WHERE id = ?');
$stmt->bind_param('i', $pid);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$total_price = number_format($row['total_price'], 2);

// Return the updated total price of the item to the AJAX request
echo $total_price;
?>