

<?php
	$user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
	$user_password = $_POST['user_password'];
	$user_number = $_POST['user_ph'];
	echo "$user_name+	+$user_email";
	// Database connection
	$conn = new mysqli('localhost','root','','users');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "INSERT INTO registration(user_name, user_email, user_password, user_ph)
		 VALUES ('$user_name', '$user_email', '$user_password', '$user_number')";
		if(mysqli_query($conn, $sql)){
			echo "Records added successfully.";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		}
		$conn->close();
	}
	

?>

