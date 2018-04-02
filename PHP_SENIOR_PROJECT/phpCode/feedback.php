<!DOCTYPE html>
<html>
<?php include "head.php";?>
<body>
    <div id="wrapper">
        <div id="content">
			<?php include "navbar.php";?>
		<div id="main">
			<div class="container dark">
				<center><h3 class="pb20">Tell Us What You Think? </h3></center>
			  <form name="feedback" id="feedback" action="feedbackFormProcess.php" onsubmit="return ValidateForm()" method="post">
				<label>How Satisfied Were You With The Purchase?</label>
				<br/><br/>
				<label><input type="radio" name="AccHowSatisfied" value="1" id="AccHowSatisfied_0"> Extremely Satisfied</label>
				<br/>
				<label><input type="radio" name="AccHowSatisfied" value=".75" id="AccHowSatisfied_1"> Very Satisfied </label>
				<br/>
				<label><input type="radio" name="AccHowSatisfied" value=".5" id="AccHowSatisfied_2"> Neutral </label>
				<br/>
				<label><input type="radio" name="AccHowSatisfied" value=".25" id="AccHowSatisfied_3"> Very Dissatisfied </label>
				<br/>
				<label><input type="radio" name="AccHowSatisfied" value="0" id="AccHowSatisfied_4"> Extremely Dissatisfied</label>
				<br/><br/><br/>
				
				<label for="subject">Comments About Your Purchase</label>
				<textarea id="commentOnPurchase_0" name="commentOnPurchase" placeholder="Please write comment here.." style="height:200px"></textarea>
				
				
				<label for="fname">First Name</label>
				<input type="text" id="fname" name="firstname" placeholder="Your name..">

				<label for="lname">Last Name</label>
				<input type="text" id="lname" name="lastname" placeholder="Your last name..">
				
				<label for="email">Email</label>
				<input type="text" id="email" name="email" placeholder="Email..">

				<input type="submit" name="Submit" value="Send Feedback">
				<input type="reset" name="Reset" value="Reset Form">
			  </form>
			</div>
				
		</div>
		
		<script>
			function ValidateForm()
			{
				var feedbackForm = document.getElementById("feedback");
				var firstName = feedbackForm.firstname.value;
				var lastName = feedbackForm.lastname.value;
				var email = feedbackForm.email.value;
				
				if(!ValidateName(firstName))
				{
					alert("Error: First Name is Invalid.");
					return false;
				}
				
				if(!ValidateName(lastName))
				{
					alert("Error: Last Name is Invalid.");
					return false;
				}
				
				if(!ValidateEmail(email))
				{
					alert("Error: Email is Invalid.");
					return false;
				}
				
				return true;
			}
			
			function ValidateName(name)
			{
				var check = name.search(/^[a-zA-Z]{2,50}$/);
	
				if (check === 0) {
					return true;
				} else 
				{
					return false;
				}
			}
			
			function ValidateEmail(email) 
			{
				var check = email.search(/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/);
				
				if (check === 0) {
					return true;
				} else 
				{
					return false;
				}
			}
		
		</script>
	</div>
        <?php include "footer.php";?>
    </div>
</body>

</html>
