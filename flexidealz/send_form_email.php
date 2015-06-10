<?php
 
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
 
    $email_to = "harshal.hash@gmail.com";
 
    $email_subject = "Contact"; 
	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Additional headers
	$headers .= 'To: Hary <harshal.hash@gmail.com>, Amit <amitc.hash@gmail.com>,  Yash <flexideals.in@gmail.com>' . "\r\n";
	$headers .= 'From: Contact Us <contact@flexidealz.in>' . "\r\n";
	/*$headers .= 'Cc: contact@flexidealz.in' . "\r\n";
	$headers .= 'Bcc: contact@flexidealz.in' . "\r\n";*/
	
	
    $email_message .= "First Name: ".$_POST["name"]."\n";
 
   // $email_message .= "Last Name: ".$_POST["name"]."\n";
 
    $email_message .= "Email: ".$_POST["email"]."\n";
 
   // $email_message .= "Telephone: ".($telephone)."\n";
 
    $email_message .= "Comments: ".$_POST["message"]."\n";
 
     
 
    if( mail($email_to, $email_subject, $email_message, $headers) !== true) {
        die('Fail to send');
    }else{ 
/*	    die('Thank you for contacting us. We will be in touch with you very soon.');*/
      
?>
<!-- include your own success html here -->
Thank you for contacting us. We will be in touch with you very soon. <a href='http://flexidealz.in' title="Go back to Flexi Dealz">go back</a>
<?php
    }
 }
?>