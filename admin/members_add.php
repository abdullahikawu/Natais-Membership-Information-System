<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$title = $_POST['title'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$othername = $_POST['othername'];
		$stat = $_POST['status'];
		$state = $_POST['state'];
		$phone = $_POST['phone_no'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$wing = $_POST['wing'];
		$year_entry = $_POST['year_entry'];
		$institution = $_POST['institution'];
		$position = $_POST['position'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		//generate voters id
		$set = 'NCOE/ALUMNUS/'.rand(1000,9999).'';
		$voter = substr(str_shuffle($set), 0, 15);
		

		$sql = "INSERT INTO members (membership_id, password, title, firstname, lastname, othername, status, state, phone_no, address, email, wing, year_entry, institution, position, photo) VALUES ('$voter', '$password', '$title', '$firstname', '$lastname', '$othername', '$stat', '$state', '$phone', '$address', '$email', '$wing', '$year_entry', '$institution', '$position', '$filename')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'new member added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: members.php');
?>