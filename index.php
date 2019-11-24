<?php
    include 'header.php';
?>

<from action="result.php" method="POST">
    <input type="text" name="search" placeholder="Search for Morgan Car..">
    <button type="submit" name="submit-search">Search</button>
</from>

    <h1>Welcome to MORGAN Car Search Page</h1>
    <h2>The Car Information and Detail:</h2>
    <div class="result">
        <?php
            $sql = "SELECT * FROM ";//table name
            $result = mysqli_query($connect, $sql);
            $queryResult = mysqli_num_rows($result);

            if($queryResult > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<div class = result-box>
                    //the column add here to output
                    </div>";
                }
            }


