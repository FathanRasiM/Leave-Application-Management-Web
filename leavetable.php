<?php
    $con = mysqli_connect("localhost", "root", "", "db_leave");
    if(!$con) {
        die('Could not connect: ' . mysqli_error());
    }

    $sql = "CREATE TABLE Leaves (
            LeaveID int,
            Reason varchar(15),
            DateFrom DATE,
            DateTo DATE,
            UserID varchar(15),
            PRIMARY KEY(LeaveID),
            FOREIGN KEY(UserID) REFERENCES Users(UserID)
            )";
    mysqli_query($con, $sql);
    mysqli_close($con);
?>