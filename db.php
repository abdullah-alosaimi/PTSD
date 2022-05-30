
<?php
		$host = "localhost";
		$user = "root";
		$password = "";
		$dbname = "ptsd";
		$db = mysqli_connect($host, $user, $password, $dbname);
		// Check connection
        if (mysqli_connect_errno()) {
            echo "Connection failed: " . mysqli_connect_error();
            exit();
        }
?>