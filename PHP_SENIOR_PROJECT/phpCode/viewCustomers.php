<!DOCTYPE html>
<html>
<?php include "head.php"; ?>
<body>
<?php include "includes/connectDB.inc.php"; ?>
	
	<div id="wrapper">
        <div id="content">
			<?php include "navbar.php";?>
            <div id="main">
				<h2>&nbsp;&nbsp;All Customers</h2>
				<div class="container">
                    <?php
                        $products = mysqli_query($db_Connection, "SELECT * FROM Customer ORDER BY firstName ASC") or die(mysql_error());
                        $numRecords = mysqli_num_rows($products);

                        echo "<table border='1' width='600' class='displayProduct'>"; 
                        echo "<tr>
                        <th>Customer Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th> 
                        <th>Admin</th> 
                        </tr>"; 
                        
                        for ($i = 0; $i < $numRecords; $i++) 
                        {
                            echo "<tr>"; 
                            $row = mysqli_fetch_array($products);
                            
                            if($row["isAdmin"] == 1)
                            {
                                $isAdmin = "Yes";
                            }
                            else
                            {
                                $isAdmin = "No";
                            }
                            echo "<td align='center'>". $row["customerId"]."</td>"; 
                            echo "<td align='center'>". $row["firstName"]."</td>"; 
                            echo "<td align='center'>". $row["lastName"]."</td>"; 
                            echo "<td align='center'>". $row["email"]. "</td>";
                            echo "<td align='center'>". $isAdmin. "</td>"; 
                        } 
                        echo "</table>";
                    ?>
				</div>

			</div>
			
		</div>

		<?php include "footer.php";?>
		</div>
    </body>

</html>
