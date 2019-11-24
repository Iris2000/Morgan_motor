<?php
    include 'header.php';
?>

<div class="result">
<?php
    if(isset($_POST['submit-search'])){
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM WHERE LIKE '%search%' OR LIKE '%search% ";//to add the row name of db
        $result = mysqli_query($conn,$sql);
        $queryResult = mysqli_num_rows($result);

        if($queryResult > 0){
            
        }
        else{
            echo "Your search didn't match any data";
        }
    }

?>
</div>