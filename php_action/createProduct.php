<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$productName 		= $_POST['productName'];
	$quantity 			= $_POST['quantity'];
	$rate 					= $_POST['rate'];
	$productStatus 	= $_POST['productStatus'];

	$sql = "INSERT INTO product (product_name, quantity, rate, active, status) VALUES ('$productName', '$quantity', '$rate', '$productStatus', 1)";

	if($connect->query($sql) === TRUE) {
		$valid['success'] = true;
		$valid['messages'] = "Successfully Added";	
	} else {
		$valid['success'] = false;
		$valid['messages'] = "Error while adding the members";
	}
	
	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST