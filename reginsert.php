<?php
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "db_leave");
$position=$_POST['position'];
$sql = "INSERT INTO User (UserID, Pass, FullName, Department, Position)
VALUES('$_POST[userid]', '$_POST[password]', '$_POST[name]', '$_POST[department]', '$_POST[position]')";
if(!mysqli_query($con, $sql)) {
    die('Error : ' . mysqli_error());
}

if ($position == "Staff") {
    header('Location:staffmainpage.html');
}

if($position == "Manager") {
    header('Location:managermainpage.html');
}
mysqli_close($con)
?>