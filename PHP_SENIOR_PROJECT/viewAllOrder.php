<!DOCTYPE html>
<html>
<?php include "head.php"; ?>
<body>
<?php include "includes/connectDB.inc.php"; ?>
	
	<div id="wrapper">
        <div id="content">
			<?php include "navbar.php";?>
            <div id="main">
				<h2>&nbsp;&nbsp;All Orders</h2>
				<div class="container">
                    <?php
                        $transactions = mysqli_query($db_Connection, "SELECT * FROM Transaction ORDER BY transactionId ASC") or die(mysql_error());
                        $numRecords = mysqli_num_rows($transactions);

                        echo "<table border='1' width='600' class='displayProduct'>"; 
                        echo "<tr>
                        <th>Customer Email</th>
                        <th>Product Id</th>
                        <th>Quantity</th>
                        </tr>"; 
                        
                        for ($i = 0; $i < $numRecords; $i++) 
                        {
                            echo "<tr>"; 
                            $row = mysqli_fetch_array($transactions); 
                            echo "<td align='center'>". $row["customerEmail"]."</td>"; 
                            echo "<td align='center'>". $row["productId"]."</td>"; 
                            echo "<td align='center'>". $row["quantity"]."</td></tr>"; 
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
