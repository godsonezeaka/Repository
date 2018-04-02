<!DOCTYPE html>
<html>
<?php include "head.php";?>
<body>
    <div id="wrapper">
        <div id="content">
			<?php include "navbar.php";?>
            <div id="main">
				<div class="container dark">
                    <?php

                        $db_location = "localhost";
                        $db_username = "g794323e";
                        $db_password = "100194";
                        $db_database = "g794323e";

                        $db_Connection = mysqli_connect("$db_location", "$db_username", "$db_password", "$db_database") or die("Error Connecting to the MySQL Server");

                        // This page is used as a sample on how to login
                        // I do the checks if you are logged in and the actual query
                        // at the top so this runs first, If not logged in it just 
                        // skips where the user can enter login data
                        if (isset($_SESSION["firstName"]))
                        {
                        $error= "You are already logged in";
                        }
                        elseif (isset($_POST['email']))
                        {
                        // try to login
                        $sql = "SELECT * FROM Customer WHERE email = '".$_POST['email']."'";

                        $rowsWithMatchingLogin = mysqli_query($db_Connection, $sql) or die(mysql_error());
                        $numRecords = mysqli_num_rows($rowsWithMatchingLogin); 
                
                        //echo "There are ".$numRecords." of these email addresses<br><br>";
                        // check to make sure that on initial page load the query doesn't run
                        if ($numRecords == 1)
                        {
                        $row = mysqli_fetch_array($rowsWithMatchingLogin);

                        if ($_POST['password'] == $row['password'])
                        { // set session variables and display
                        $_SESSION["firstName"] = $row['firstName'];
                        $_SESSION["lastName"] = $row['lastName'];
                        $_SESSION["email"] = $row['email'];
                        $_SESSION["password"] = $row['password'];
                        $_SESSION["admin"] = $row['isAdmin'];
						header("Location: index.php");
                        } 
                        else
                        {
                        $error= "Password is incorrect";
                        }// end the if that checks for 1 success
                        }
                        else
                        {
                        $error= "Email not found"; 
                        }

                        } //end of overall if
                        mysqli_close($db_Connection);

                        ?>
                    <center><h3 class="pb20">Login </h3></center>
			  <form name="loginForm" id="login" action="login.php" method="post">
				<label for="email">Email</label>
				<input type="text" id="email" name="email" placeholder="Email..">
				
				<label for="password">Password</label>
				<input type="password" id="password" name="password" placeholder="Password..">

				<input type="submit" name="login" value="Login">
			  </form>
			</div>
            </div>
        </div>
        <?php include "footer.php";?>
    </div>
</body>

</html>
