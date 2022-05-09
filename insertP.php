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
		$conn = mysqli_connect("localhost", "root", "", "productdb");
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		// Taking all 5 values from the form data(input)
		$Qname = $_REQUEST['Qname'];
		$Qemail = $_REQUEST['Qemail'];
		$Qsubject = $_REQUEST['Qsubject'];
		$Qmessage = $_REQUEST['Qmessage'];
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO qwerty VALUES ('$Qname',
			'$Qemail','$Qsubject','$Qmessage')";
		if(mysqli_query($conn, $sql)){
			echo "<h3>Data stored in a database successfully."
				. ""
				. "</h3>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		// Close connection
		mysqli_close($conn);
		?>
</body>
</html>