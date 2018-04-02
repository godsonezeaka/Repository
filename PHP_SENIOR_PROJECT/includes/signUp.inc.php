<?php
	session_start();
?>

<?php
include "connectDB.inc.php"; 

if ($_POST['adminstrator'] != 1) {
    $_POST['adminstrator'] = 0;
}

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
mysqli_query($db_Connection, $sql) or die(mysql_error());
echo "<script>";
echo "alert('Account has been created!');";
echo "window.location = '../index.php'";
echo "</script>";
}

?>
