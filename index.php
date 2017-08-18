<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "HNGdb";
	
	// Create connection
	$conn = mysql_connect($servername, $username, $password);
	$dbconn = mysql_select_db($dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	if (!$dbconn) {
		die("Connection failed: " . mysql_error());
	}
	
	//sql to fetch data from table
	$result = mysql_query("SELECT * FROM interns");
	$count = mysql_num_rows($result);
	if ($count > 0){
		while ($row = mysql_fetch_assoc($result)){
			echo $row["id"]."- NAME: ".$row["firstname"]." ".$row["lastname"]. "   EMAIL: ".$row["email"]."<br>";
		}
	}
?>