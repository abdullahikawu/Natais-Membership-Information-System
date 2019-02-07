<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$title = $_POST['title'];
		$firstname = $_POST['firstname'];
		$othername = $_POST['othername'];
		$lastname = $_POST['lastname'];
		$state = $_POST['state'];
		$phone_no = $_POST['phone_no'];
		$address = $_POST['address'];
		$institution = $_POST['institution'];


		$sql = "SELECT * FROM members WHERE id ='".$voter['id']."'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		

		$sql = "UPDATE members SET title = '$title', firstname = '$firstname', othername = '$othername', lastname = '$lastname', state = '$state', phone_no = '$phone_no', address = '$address', email = '$email', institution = '$institution', WHERE id ='".$voter['id']."'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'member information updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: members.php');

?>