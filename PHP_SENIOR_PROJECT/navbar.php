<header><img src="Images/logo.png" width="258" height="70" alt="Header Logo">
			</header>
				<div id="LoginHeading">
				<?php
					date_default_timezone_set('EST');
					echo "<label style='color:white;float:left;'>";
					echo "Today is " . date("l") . " ";
					echo  date("M d, Y") . " ";
					echo date("h:i a ");
					echo date_default_timezone_get();
					echo "</label>";
					
                    if (isset($_SESSION['email']) )
                    {
						
						echo "<label style='color: white;'> Welcome ".$_SESSION["firstName"];
						echo " ".$_SESSION["lastName"];
						echo ", You are logged in! |</label>";
						
						echo "<a href='logOut.php' class='KeepPink'>
						LOGOUT </a>";
                    }
                    else
                    {
						echo "<a href='signUp.php' class='KeepPink'>
						NEW HERE? SIGN UP | </a><a href='login.php' class='KeepPink'>LOGIN</a>&nbsp;&nbsp"; 
                    } 
                ?> 
				
				</div>
	<center>
		<nav class="navClass pt20">
			<div class="dropdown">
			  <button class="dropbtn"><a href="index.php">Home</a></button>
			</div>

			<div class="dropdown">
			  <button class="dropbtn">Info</button>
			  <div class="dropdown-content">
				<a href="about.php">About Us</a>
				<a href="contactPage.php">Contact</a>
				<a href="feedback.php">Feedback</a>
			  </div>
			</div>
			
			<div class="dropdown">
			  <button class="dropbtn">Products</button>
			  <div class="dropdown-content">
				<a href="allProduct.php">All Products</a>
				<a href="hairShowCase.php">Hair</a>
				<a href="faceShowCase.php">Face</a>
				<a href="cosmeticsShowCase.php">Cosmetics</a>
				<a href="bodyShowCase.php">Body</a>
			  </div>
			</div>
			
			<?php
                    if (isset($_SESSION['admin']))
                    {
						if($_SESSION['admin'] == 1)
						{
							echo "<div class='dropdown'>
									<button class='dropbtn'>Admin</button>
									  <div class='dropdown-content'>
										<a href='addProduct.php'>Add a Product</a>
										<a href='displayProduct.php'>Display All Products</a>
										<a href='updateCustomer.php'>Update a Customer</a>
										<a href='updateProduct.php'>Update a Product</a>
										<a href='viewCustomers.php'>View all Customers</a>
										<a href='viewAllOrder.php'>View all Orders</a>
										<a href='feedback.txt'>View all Feeback</a>
									  </div>
								</div>";
						}
					}
                ?> 
			
			
		</nav>
	</center>
