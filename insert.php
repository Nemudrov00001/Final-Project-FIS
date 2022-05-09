<!DOCTYPE html>
<html>
<head>
	<title>Insert Page page</title>
</head>
<body>
		<?php
		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "staff");
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$address = $_REQUEST['address'];
		$houseNumber = $_REQUEST['house_number'];
		$FlatQ = $_REQUEST['flat'];
		$entranceQ = $_REQUEST['entrance'];
		$doorCode = $_REQUEST['door_code'];
		$FloorQ = $_REQUEST['floor'];
		$phoneNumber = $_REQUEST['phone_number'];
		$email = $_REQUEST['email'];
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO college VALUES ('$first_name',
			'$last_name','$address','$houseNumber','$FlatQ','$entranceQ','$doorCode','$FloorQ','$phoneNumber','$email')";
		if(mysqli_query($conn, $sql)){
			echo "<h3>Data stored in a database successfully."
				. ""
				. "</h3>";
			echo nl2br("\n$first_name\n $last_name\n "
				. "$address\n$houseNumber\n$FlatQ\n$entranceQ\n$doorCode\n$FloorQ\n$phoneNumber\n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		// Close connection
		mysqli_close($conn);
		?>
</body>
</html>