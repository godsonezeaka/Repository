<?php
	/*feedbackFormProcess.php
Processes feedback form data by first constructing a
message of response from the user's input, and then 
- sends an e-mail message to the business
- sends a sligtly modified e-mail message to the client
- returns a confirmation message to the client's browser
- logs the feedback in a file on the server
*/

//Construct message to be sent to the business
$messageToBusiness = 
    "From: $_POST[firstname] $_POST[lastname]\r\n".
    "E-mail address: $_POST[email]\r\n".
    "Subject: Processed Feedback Form\r\n".
	"How Satisfied Were You With The Purchase(Total Rating: 1): $_POST[AccHowSatisfied]\r\n".
	"Comments About Your Purchase: $_POST[commentOnPurchase]\r\n";
	
	//Send e-mail feedback message to the business
	$headerToBusiness = "From: $_POST[email]\r\n";
	mail("gae9153@gmail.com", "Processed Feedback Form",
		$messageToBusiness, $headerToBusiness);
		
		
//Construct e-mail confirmation message for the client,
//which is just a sligtly modified version of the message
//that went to the business
$messageToClient =
    "Dear $_POST[firstname] $_POST[lastname],\r\n".
    "The following message was received:\r\n\r\n".
    $messageToBusiness.
    "------------------------\r\n".
    "Thank you for the feedback and your patronage,\r\n".
    "The GlamLooks Team.\r\n".
    "------------------------\r\n";

if ($_POST['reply']) $messageToClient.=
    "P.S. We will contact you shortly with more information.";

	
	
	//Sends e-mail confirmation message to the client
$headerToClient = "From: gae9153@gmail.com\r\n";
mail($_POST['email'], "We Received Your Feedback",
    $messageToClient, $headerToClient);

		
		//Transforms confirmation message to HTML 5 format for
//display in the client's browser
$display = str_replace("\r\n", "\r\n<br>", $messageToClient);
$display = "<!DOCTYPE html>
    <html lang='en'>
    <head><meta charset='utf-8'><title>Your Message</title></head>
    <body><code>$display</code></body>
    </html>";
echo $display;


//Logs the message in data/feedback.txt on the web server
//Note: directory "data" is at same level as directory "scripts"
$fileVar = fopen("feedback.txt", "a")
    or die("Error: Could not open the log file.");
fwrite($fileVar,
    "\n-------------------------------------------------------\n")
    or die("Error: Could not write divider to the log file.");
fwrite($fileVar, "Date received: ".date("jS \of F, Y \a\\t H:i:s\n"))
    or die("Error: Could not write date to the log file.");
fwrite($fileVar, $messageToBusiness)
    or die("Error: Could not write message to the log file.");

?>