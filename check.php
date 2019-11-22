<?php
    
    session_start();

    $error = '';

	if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
	
        $con = mysqli_connect("localhost", "root", "", "morgan_motor");
        
        if (!$con)
        {
            echo "Failed to connect to MySQL : ".mysqli_connect_err();
            exit();
        }
        
        $sql = "SELECT * FROM `user_details` WHERE username = '$username' AND
            password = '$password'";
        $result = mysqli_query($con, $sql) or die (mysql_error());
        $rows = mysqli_num_rows($result);
        
        if($rows == 1) {
            $_SESSION['username'] = $username;
            header("Location: home.php");
        } else {
            $error = "Username or Password is invalid";
        }

        mysqli_close($con);
    }
?>