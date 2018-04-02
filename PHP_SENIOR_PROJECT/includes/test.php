<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="utf-8">
<title>Demo in Class using PhP</title>
<link href="ForClass.css" rel="stylesheet" type="text/css" />
</head>

<body>
<h2>Welcome to the in-class demo web page</h2>

<?php
echo "<h3>It's ".date("l, F jS").".<br />";
echo "The time is ".date("g:ia").".</h3>";
?>

<p><a href="DisplayTable.php">Display Table of Customers</a></p>
<p><a href="AddCustomer.php">Add Customer</a></p>
<p><a href="UpdateCustomer.php">Update Customer</a></p>
<p><a href="login.php">Login</a></p>
<p><a href="logout.php">logout</a></p>
<p>
<?php
if (isset($_SESSION['email']) )
{
echo "Welcome ".$_SESSION["fname"];
}
else
{
echo "You are not logged in"; 
} 
?>
</p>
</body>
</html>