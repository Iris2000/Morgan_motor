
<!doctype html>
<html lang="en">
<body>
 <form action="second.php">
   <?php
     $conn = mysqli_connect ("localhost","root","");
     if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
     }
     $sql="CREATE DATABASE search_engine";
     if (mysqli_query($conn, $sql)) {
       echo "Database created successfully";
     }
     else {
       echo "Error creating database: " . mysqli_error($conn);
     }
     mysqli_close($conn);
   ?>
     <input type="submit" value="next">
 </form>
</body>
 </html>
