<!DOCTYPE html>
<html>
<?php include "head.php";?>
<body>
    <div id="wrapper">
        <div id="content">
        <?php include "navbar.php";?>
		
            <div id="main">
				<div class="container dark">
				<center><h3 class="pb20">Sign Up </h3></center>
			  <form id="register" name="register" method="post" action="includes/signUp.inc.php">
				<label for="fname">First Name</label>
				<input type="text" id="firstName" name="firstName" placeholder="Your name..">

				<label for="lname">Last Name</label>
				<input type="text" id="lastName" name="lastName" placeholder="Your last name..">
				
				<label for="email">Email</label>
				<input type="text" id="email" name="email" placeholder="Email..">
				
				<label for="password">Password</label>
				<input type="password" id="password" name="password" placeholder="Password..">
				
				Administrator: <input type="checkbox" name="adminstrator" value="1">
				<br><br>
				

				<input type="submit" name="submit" value="Sign Up">
			  </form>
			</div>
            </div>
        </div>
        <?php include "footer.php";?>
    </div>



</body>

</html>
