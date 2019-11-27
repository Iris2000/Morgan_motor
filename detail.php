<?php
    session_start();
    include 'header.php';
    include 'DB.php';
    $detail = $_POST["button"];
    if($detail == '5'){
        $sqlA = "SELECT * FROM cars WHERE (Cars_ID=5)";//table name
        $resultA = mysqli_query($conn, $sqlA);
        $queryResultsA = mysqli_num_rows($resultA);
        $sqlB = "SELECT * FROM specs WHERE (Cars_ID=5)";//table name
        $resultB = mysqli_query($conn, $sqlB);
        $queryResultsB = mysqli_num_rows($resultB);

        if($queryResultsA > 0){
            $resAs=array();

            while($rowA = mysqli_fetch_assoc($resultA)){

                $resAs=$rowA;
            }
    
        }
        if($queryResultsB > 0){
            $resBs=array();
            $counterB=0;

            while($rowB = mysqli_fetch_assoc($resultB)){
                
                $resBs[$counterB]=$rowB;
                $counterB++;
            }
    
        }
        print_r ($resAs);
        echo "<br><br>";
        print_r ($resBs);
    }

    else if($detail == '4'){
        $sqlA = "SELECT * FROM cars WHERE (Cars_ID=4)";//table name
        $resultA = mysqli_query($conn, $sqlA);
        $queryResultsA = mysqli_num_rows($resultA);
        $sqlB = "SELECT * FROM specs WHERE (Cars_ID=4)";//table name
        $resultB = mysqli_query($conn, $sqlB);
        $queryResultsB = mysqli_num_rows($resultB);

        if($queryResultsA > 0){
            $resAs=array();

            while($rowA = mysqli_fetch_assoc($resultA)){
                
                $resAs=$rowA;
            }
    
        }
        if($queryResultsB > 0){
            $resBs=array();
            $counterB=0;

            while($rowB = mysqli_fetch_assoc($resultB)){
                
                $resBs[$counterB]=$rowB;
                $counterB++;
            }
    
        }
        print_r ($resAs);
        echo "<br><br>";
        print_r ($resBs);
    }
    else if($detail == '3'){
        $sqlA = "SELECT * FROM cars WHERE (Cars_ID=3)";//table name
        $resultA = mysqli_query($conn, $sqlA);
        $queryResultsA = mysqli_num_rows($resultA);
        $sqlB = "SELECT * FROM specs WHERE (Cars_ID=3)";//table name
        $resultB = mysqli_query($conn, $sqlB);
        $queryResultsB = mysqli_num_rows($resultB);

        if($queryResultsA > 0){
            $resAs=array();

            while($rowA = mysqli_fetch_assoc($resultA)){
                
                $resAs=$rowA;
            }
    
        }
        if($queryResultsB > 0){
            $resBs=array();
            $counterB=0;

            while($rowB = mysqli_fetch_assoc($resultB)){
                
                $resBs[$counterB]=$rowB;
                $counterB++;
            }
    
        }
        print_r ($resAs);
        echo "<br><br>";
        print_r ($resBs);
    }
    else if($detail == '2'){
        $sqlA = "SELECT * FROM cars WHERE (Cars_ID=2)";//table name
        $resultA = mysqli_query($conn, $sqlA);
        $queryResultsA = mysqli_num_rows($resultA);
        $sqlB = "SELECT * FROM specs WHERE (Cars_ID=2)";//table name
        $resultB = mysqli_query($conn, $sqlB);
        $queryResultsB = mysqli_num_rows($resultB);

        if($queryResultsA > 0){
            $resAs=array();

            while($rowA = mysqli_fetch_assoc($resultA)){
                
                $resAs=$rowA;
            }
    
        }
        if($queryResultsB > 0){
            $resBs=array();
            $counterB=0;

            while($rowB = mysqli_fetch_assoc($resultB)){
                
                $resBs[$counterB]=$rowB;
                $counterB++;
            }
    
        }
        print_r ($resAs);
        echo "<br><br>";
        print_r ($resBs);
    }
    else if($detail == '1'){
        $sqlA = "SELECT * FROM cars WHERE (Cars_ID=1)";//table name
        $resultA = mysqli_query($conn, $sqlA);
        $queryResultsA = mysqli_num_rows($resultA);
        $sqlB = "SELECT * FROM specs WHERE (Cars_ID=1)";//table name
        $resultB = mysqli_query($conn, $sqlB);
        $queryResultsB = mysqli_num_rows($resultB);

        if($queryResultsA > 0){
            $resAs=array();

            while($rowA = mysqli_fetch_assoc($resultA)){
                
                $resAs=$rowA;
            }
    
        }
        if($queryResultsB > 0){
            $resBs=array();
            $counterB=0;

            while($rowB = mysqli_fetch_assoc($resultB)){
                
                $resBs[$counterB]=$rowB;
                $counterB++;
            }
    
        }
        print_r ($resAs);
        echo "<br><br>";
        print_r ($resBs);
    }

?>