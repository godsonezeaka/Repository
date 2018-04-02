<!DOCTYPE html>
<html>
<?php include "head.php"; ?>
<body>
<?php include "includes/connectDB.inc.php"; ?>
	
	<div id="wrapper">
        <div id="content">
			<?php include "navbar.php";?>
            <div id="main">
				<h2>&nbsp;&nbsp;Cosmetics</h2>
				<div class="container">
                    <?php
                        $products = mysqli_query($db_Connection, "SELECT * FROM Product  WHERE type = 'face' ORDER BY productName ASC") or die(mysql_error());
                        $numRecords = mysqli_num_rows($products);
                        echo "<form id='buyBody' name='buyBody' method='post' action='faceShowCase.php' enctype='multipart/form-data'>";
                        echo "<table border='1' width='600' class='displayProduct'>"; 
                        echo "<tr>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Quantity</th>
						<th>Price ($)</th>						
                        <th>Image</th> 
                        <th>Type</th>
                        <th>Purchase</th>

                        </tr>"; 
                        
                        for ($i = 0; $i < $numRecords; $i++) 
                        { 
                            echo "<tr>"; 
                            $row = mysqli_fetch_array($products); 
                            echo "<td align='center'>". $row["productName"]."</td>"; 
                            echo "<td align='center'>". $row["description"]."</td>"; 
                            echo "<td align='center'>". $row["quantity"]. "</td>";
                            echo "<td align='center'>". $row["price"]. "</td>"; 
                            echo "<td align='center'><img src='productImages/". $row["image"]. "'></td>"; 
                            echo "<td align='center'>". $row["type"]. "</td>"; 
                            echo "<td align='center'><input type='submit' name='submit' value='Buy'></td></tr>";
                            
                            if (isset($_POST['submit']))
                            {
                                if (!isset($_SESSION['email']) )
                                {
                                    echo "
                                    <script> 
                                        alert('Error: You must be logged in to purchase an item!')
                                    </script>";
                                }
                                else
                                {
                                    $sql = "INSERT INTO Transaction(customerEmail, productId, quantity) VALUES ('".
                                    $_SESSION['email'].
                                    "', '".
                                     $row["productId"].
                                    "', '".
                                     $row["quantity"].
                                    "')";
                                    
                                    mysqli_query($db_Connection, $sql) or die(mysql_error());
                                    echo "<script>";
                                    echo "alert('Thank you for your order!');";
                                    echo "window.location = 'faceShowCase.php'";
                                    echo "</script>";
                                }
                            }
                        } 
                        echo "</table>";
                        echo "</form>";
                        
                        
                
                    ?>
				</div>

			</div>
			
		</div>

		<?php include "footer.php";?>
		</div>
    </body>

</html>
