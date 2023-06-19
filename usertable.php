<?php
    $con = mysqli_connect("localhost", "root", "", "db_leave");
    if(!$con) {
        die('Could not connect: ' . mysqli_error());
    }

    $sql = "CREATE TABLE Users (
            UserID varchar(15),
            Pass varchar(15),
            FullName varchar(15),
            Department varchar(15),
            Position varchar(15),
            PRIMARY KEY(UserID)
            )";
    mysqli_query($con, $sql);
    mysqli_close($con);
?>