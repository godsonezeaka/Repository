<?php
$db_location = "localhost";
$db_username = "g794323e";
$db_password = "100194";
$db_database = "g794323e";

$db_Connection = mysqli_connect("$db_location", "$db_username", "$db_password", "$db_database") or die("Error Connecting to the MySQL Server");

$sql = "INSERT INTO Customer(firstName, lastName, email, isAdmin, password) VALUES ('".
$_POST['firstName'].
"', '".
$_POST['lastName'].
"', '".
$_POST['email'].
"', '". 
$_POST['adminstrator'].
"', '". 
$_POST['password'].
"')";

if ($_POST['email'] != "" )
{
echo $sql;
mysqli_query($db_Connection, $sql) or die(mysql_error());
echo "<script>";
echo "alert('Client Updated');";
echo "window.location.href = 'DisplayTable.php';";
echo "</script>";
}

?>