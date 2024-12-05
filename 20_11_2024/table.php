<?php

require_once 'dbconf.php';

try {

	
	$sql = "SELECT * FROM Student";

	
	$result = mysqli_query($connect,$sql);
	
	if (mysqli_num_rows($result)>0) {
		// fetch the data from rows
		while ($row = mysqli_fetch_assoc($result)) {
			print_r($row);
		}
	} else {
		echo "No results";
	}
	
} catch (Exception $e) {
	die($e->getMessage());
}


?>