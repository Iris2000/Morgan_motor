<?php
    include 'header(new).php';
    include 'DB.php';
?>

<div class="result">
<?php
    // if(isset($_POST['submit-search'])){
    //     $search = mysqli_real_escape_string($conn, $_POST['search']);
    //     $sql = "SELECT * FROM cars WHERE LIKE '%search%' OR LIKE '%search%'";//to add the row name of db
    //     $result = mysqli_query($conn,$sql);
    //     $queryResult = mysqli_num_rows($result);
    //
    //     if($queryResult > 0){
    //
    //     }
    //     else{
    //         echo "Your search didn't match any data";
    //     }
    // }

    //Gonnie edit
        $keyword= $_POST['search'];
        $search = mysqli_real_escape_string($conn, $keyword);
        $sql = "SELECT * FROM cars WHERE Name LIKE '%$keyword%'"; //to add the row name of db
        $result = mysqli_query($conn,$sql);
        $res=$conn->query($sql);
        while($row=$res->fetch_assoc()){
            print_r($row);
        }

?>
</div>
