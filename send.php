<?php  


if (isset($_POST['name']) && isset($_POST['message'])) {
	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$message = validate($_POST['message']);
	$user_name = validate($_POST['user_name']);
	
	

	if (empty($message) || empty($name)) {
		header("Location: dashboard.html");
	}else {

		$sql = "INSERT INTO test(name, message, user_name) VALUES('$name', '$message', '$user_name')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "Your withdraw details sent successfully!";
			
		}else {
			echo "Your message could not be sent!";
		}
	}

}else {
	header("Location: index.php");
}