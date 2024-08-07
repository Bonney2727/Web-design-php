<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "petss";

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name );

if($connection){
    echo "connected successfully";
}

else{
    die("Connection failed because of the errors" . mysqli_connect_error($connection));

        #display the date.

        echo "<h2> Contact form submission</h2>";
        echo "Pet's Name:" .$name."<br>";
        echo "Pet's Breed:" .$breed_name."<br>";
        echo "Pet's Weight:" .$weight."<br>";
        echo "Pet's Color:" .$color."<br>";
        echo "Pet's Consumption Rate:" .$rate."<br>";

}
?>