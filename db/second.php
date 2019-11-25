<!doctype html>
<html lang="en">
<body>
 <form action="third.php">
   <?php
     $conn = mysqli_connect ("localhost","root","","search_engine");
     if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
     }

     //Create Table: user
     $sqlUser="CREATE TABLE user (
      username VARCHAR(255),
      passwd VARCHAR(50)
  );";
    if (mysqli_query($conn, $sqlUser)) {
      echo "TABLE: user created successfully";
    }
    else {
      echo "Error creating TABLE: " . mysqli_error($conn);
    }

     //Create Table: cars
     $sqlCars="CREATE TABLE cars (
       Cars_ID INT NOT NULL AUTO_INCREMENT,
       Name VARCHAR(255),
       Powers VARCHAR(50),
       Top_Speed VARCHAR(50),
       kmh VARCHAR(50),
       Combine_CO2 VARCHAR(50),
       Description VARCHAR(300),
       Update_Date INT,
       PRIMARY KEY (Cars_ID)
   );";
     if (mysqli_query($conn, $sqlCars)) {
       echo "TABLE: CARS created successfully";
     }
     else {
       echo "Error creating TABLE: " . mysqli_error($conn);
     }

     //Create Table: specs
     $sqlSpecs="CREATE TABLE specs(
       Specs_ID INT NOT NULL AUTO_INCREMENT,
       Type VARCHAR(20),
       Cars_ID INT,
       Engine VARCHAR(50),
       Gearbox VARCHAR(50),
       MaxPower VARCHAR(50),
       MaxTorque VARCHAR(50),
       Performance VARCHAR(50),
       TopSpeed VARCHAR(50),
       CombinedMPG VARCHAR(50),
       DryWeight VARCHAR(50),
       ListPrice DECIMAL,
       VAT DECIMAL,
       ListPriceIncVAT DECIMAL,
       PRIMARY KEY (Specs_ID),
       FOREIGN KEY (Cars_ID) REFERENCES cars(Cars_ID)
     );";
     if (mysqli_query($conn, $sqlSpecs)) {
       echo "TABLE: specs created successfully";
     }
     else {
       echo "Error creating TABLE: " . mysqli_error($conn);
     }

     //Create Table: dealer
     $sqlDealer="CREATE TABLE dealer(
      Dealer_ID INT NOT NULL AUTO_INCREMENT,
      Title VARCHAR(50),
      Team VARCHAR(50),
      Name VARCHAR(50),
      Address1 VARCHAR(50),
      Address2 VARCHAR(50),
      Postcode VARCHAR(50),
      State VARCHAR(50),
      Country VARCHAR(50),
      Tele VARCHAR(50),
      PRIMARY KEY (Dealer_ID)
    );";

    if (mysqli_query($conn, $sqlDealer)) {
      echo "TABLE: dealer created successfully";
    }
    else {
      echo "Error creating TABLE: " . mysqli_error($conn);
    }

     mysqli_close($conn);
   ?>
     <input type="submit" value="next">
 </form>
</body>
 </html>
