<?php 
    $con = mysqli_connect("localhost", "root", "");
    if(!$con) {
        die('Could not connect: ' . mysqli_error());
    }
    if(mysqli_query($con, "CREATE DATABASE db_leave")) {
        echo "Database created";
    }
    else {
        echo "Error creating database: " . mysqli_error();
    }
    mysqli_close($con);
?>