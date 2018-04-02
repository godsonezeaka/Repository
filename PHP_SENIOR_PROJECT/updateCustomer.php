<!DOCTYPE html>
<html>
<?php include "head.php"; ?>
<body>
<?php include "includes/connectDB.inc.php"; ?>
	
	<div id="wrapper">
        <div id="content">
			<?php include "navbar.php";?>
            <div id="main">
				<h2>&nbsp;&nbsp;Update Customer</h2>
				<div class="container dark">
                    <?php
                        echo "<form id='getCustomer' name='getCustomer' method='post' action='updateCustomer.php' onsubmit=''>";
                        $sql = "SELECT * FROM Customer";
                        $result = mysqli_query($db_Connection, $sql) or die(mysqli_error());
                        
                        // take out line that used to be here
                        echo "<br><br>";
                        echo "Select a Customer to Update: <select name='CustomerID' id='CustomerID'>";
                        echo "<option value='----------'>----------</option>";
                        while ($row = mysqli_fetch_array($result)) 
                        {
                        echo "<option value='".$row['email']."'>".$row['firstName']." ".$row['lastName']."</option>";
                        }
                        echo "</select><br><br>";
                        echo "<input type='submit' value='Get Client Data'><br><br>";
                        ?>
                        </form>
                        
                    <form id="register" name="register" method="post" action='updateCustomer.php' >
                        <?php
                        $sql = "SELECT * FROM Customer WHERE email = '".$_POST[CustomerID]."'";
                        $result = mysqli_query($db_Connection, $sql) or die(mysqli_error());
                        $numRecords = mysqli_num_rows($result);

                        $row = mysqli_fetch_array($result);
                        $varFirstName =  $row["firstName"];
                        $varLastName =  $row["lastName"];
                        $varEmail =  $row["email"];
                        $varPassword = $row["password"];
                        $varAdmin = $row["isAdmin"];

                        echo "First Name: <input type='text' id='fname' name='fname' value='$varFirstName'><br/><br/>";
                        echo "Last Name: <input type='text' id='lname' name='lname' value='$varLastName'><br/><br/>";
                        echo "Email: <input type='text' id='email' name='email' value='$varEmail' readonly><br/><br/>";
                        echo "Password: <input type='password' id='password' name='password' value='$varPassword' readonly><br/><br/>";
                        echo "Administrator: <input type='checkbox' id='administrator' name='administrator' value='1'><br/><br/>";

                        echo "<input type='submit'value='Update Customer'>";
                        echo "</form>";

                        if($varAdmin == 1) //Check checkbox for admin if user is admin
                        {
                            echo "<script>document.getElementById('administrator').checked = true;</script>";
                        }
                        ?>
					<?php
                        if ($_POST['adminstrator'] != 1) {
                            $_POST['adminstrator'] = $varAdmin;
                        }
                            
                        // update data to the database
                        $sql = "UPDATE Customer SET 
                        firstName = '".$_POST['fname']."', 
                        lastName = '".$_POST['lname']."', 
                        isAdmin = '".$_POST['administrator']."',
                        password = '".$_POST['password']."'
                        
                        WHERE email = '".$_POST['email']."';";
                        
                        if($_POST['email'] != "")
                        {
                            mysqli_query($db_Connection, $sql) or die(mysql_error());
                            echo "<script>";
                            echo "alert('Customer has been Updated');";
                            echo "window.location.href = 'viewCustomers.php';";
                            echo "</script>";
                        }
                        
                        mysqli_close($db_Connection);
                    ?>
				</div>

			</div>
			
		</div>

		<?php include "footer.php";?>
		
	</div>
</body>
</html>













