<!DOCTYPE html>
<html>
<?php include "head.php"; ?>
<body>
<?php include "includes/connectDB.inc.php"; ?>
	
	<div id="wrapper">
        <div id="content">
			<?php include "navbar.php";?>
            <div id="main">
				<h2>&nbsp;&nbsp;All Products</h2>
				<div class="container">
                    <?php
                        $products = mysqli_query($db_Connection, "SELECT * FROM Product ORDER BY productId ASC") or die(mysql_error());
                        $numRecords = mysqli_num_rows($products);

                        echo "<table border='1' width='600' class='displayProduct'>"; 
                        echo "<tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Quantity</th> 
                        <th>Price($)</th> 
                        <th>Image</th> 
                        <th>Type</th>

                        </tr>"; 
                        
                        for ($i = 0; $i < $numRecords; $i++) 
                        { 
                        echo "<tr>"; 
                        $row = mysqli_fetch_array($products); 
                        echo "<td align='center'>". $row["productId"]."</td>"; 
                        echo "<td align='center'>". $row["productName"]."</td>"; 
                        echo "<td align='center'>". $row["description"]."</td>"; 
                        echo "<td align='center'>". $row["quantity"]. "</td>";
                        echo "<td align='center'>". $row["price"]. "</td>"; 
                        echo "<td align='center'><img  src='productImages/". $row["image"]. "'></td>"; 
                        echo "<td align='center'>". $row["type"]. "</td></tr>"; 
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
