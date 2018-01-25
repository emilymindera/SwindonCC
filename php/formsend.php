<?php
/*
$to = "emily.wheatcroft@mindera.com";
$subject = "Cricket Club Hire Enquiry";
$subject2 = "Confirmation of Your Swindon Cricket Club Hire Enquiry";
$fullname = $_POST['fullname'];
$phonenumber = $_POST['phonenumber'];
$emailaddress = $_POST['emailaddress'];
$eventdetails = $_POST['event'];

$message = $fullname . "<br><br>" . $phonenumber . "<br><br>" . $emailaddress . "<br><br>" . $eventdetails ;
$message2 = "Thank you for your email - we will be in touch shortly!";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <mrbum@cricket.com>' . "\r\n";
$headers2 .= 'From: <jacobward88@gmail.com>' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
mail($emailaddress,$subject2,$message2,$headers2);
*/
?>

<html>
	<head>
	    <title>Swindon CC</title>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="icon" href="../images/logo.png">
	    <link rel="stylesheet" href="../css/app.css" />
	    <link rel="stylesheet" href="../css/normalize.min.css">
	    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	    <style>
	    @import url('https://fonts.googleapis.com/css?family=Lato:300,300i,400|Open+Sans');
	    </style>
	</head>
	<body>
		<nav class="navbar">
            <nav id="wrapper">
                <ul>
                    <li class="hvr-underline-from-left mobileli"><a href="../index.php">Home</a></li>
                    <li class="hvr-underline-from-left mobileli"><a href="#">Rent the Room</a></li>
                    <li class="hvr-underline-from-left mobileli"><a href="#info">What's on?</a></li>
                    <li class="hvr-underline-from-left mobileli"><a href="#find">Find us</a></li>
                </ul>
            </nav>
        </nav>
        <img class="logo" src="../images/logo.png" alt= "Swindon Cricket Club Logo" width="25%"/>
        <h1>Thank you!</h1>
        <h2 class="intro">Your form has been submitted and you should receive a confirmation email shortly.</h2>
	</body>
</html>