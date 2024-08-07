<?php
include('db_connect.php');
     if ($_SERVER["REQUEST_METHOD"] == "POST"){

        #collect items from the post method that were sent to the service
        $name=$_POST["Name"];
        $breed_name=$_POST["Breed"];
        $weight=$_POST["Weight"];
        $color=$_POST["color"];
        $rate=$_POST["Rate"];

     #what should i do with this date?
     #Insert into the database query
     $sql="INSERT INTO registering(p_name,p_breed, p_weight, p_color, comp_rate) VALUES(?,?,?,?,?)";

     //prepapre statement
     if ($stmt = mysqli_prepare($connection, $sql)){

          #bind parameters
          mysqli_stmt_bind_param($stmt, "ssisi" , $name, $breed_name, $weight, $color, $rate);

          #execute the statement
          mysqli_stmt_execute($stmt);

     }

     header("location: create_petss.php");



     }
     else{
          echo "this page can not be accessed using the get method";
     }
?>