<?php
    session_start();

    $con = mysqli_connect("localhost", "root", "", "morgan_motor");
    $error = '';
    
    if (!$con)
    {
        echo "Failed to connect to MySQL : ".mysqli_connect_err();
        exit();
    }

	if (isset($_POST["username"]) && isset($_POST["password"])) {
        $loginUsername = $_POST["username"];
        $loginPassword = $_POST["password"];
        
        $sql = "SELECT * FROM `user_details` WHERE username = '$loginUsername' AND
            passwd = '$loginPassword'";
        $result = mysqli_query($con, $sql) or die (mysql_error());
        $rows = mysqli_num_rows($result);
        
        if ($rows == 1) {
            $_SESSION["username"] = $loginUsername;
            echo "Successful";
        } else {
            echo "Username or Password is incorrect";
        }

        mysqli_close($con);
    }
?>