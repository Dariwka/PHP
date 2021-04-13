<?php 
$message_sent = false;
if(isset($_POST['email']) && $_POST['email'] != ''){

 if(filter_var($_POST['name'], FILTER_VALIDATE_EMAIL)){
//submit the form
$userName = $_POST['name'];
$userEmail = $_POST['email'];
$messageSubject = $_POST['subject'];
$message = $_POST['message'];

$to = "diana.korotkevica@gmail.com";
$body = "";

$body .= "From: ".$userName. "\r\n";
$body .= "Email: ".$userEmail. "\r\n";
$body .= "Message: ".$message. "\r\n";

mail($to, $messageSubject, $body);

$message_sent = true;
} 
else{
  $invalid_class_name = "form-invalid";
};
    
};
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300;500&family=Comfortaa&family=RocknRoll+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="webform.css">
    <title>Contact Us</title>
</head>
<body>
<?php 
if($message_sent):
?>
<h3>Thanks, we'll be in touch</h3>

<?php 
else:
?>
<div class="container">
<form action="webform.php" method="post" class="form">
<div class="form-group">
<label for="name"
class="form-label">Your name</label>
<input type="text" class="form-control" id="name" name="name" placeholder = "Name and Surname" tabindex="1" required>
</div>
<div class="form-group">
<label for="email"
class="form-label">Your Email</label>
<input type="email" class="form-control <?=$invalid_class_name ?? "" ?>" id="email" name="email" placeholder = "example@mail.com" tabindex="2" required>
</div>
<div class="form-group">
<label for="subject"
class="form-label">Subject</label>
<input type="text" class="form-control" id="subject" name="subject" placeholder = "Hello!" tabindex="3" required>
</div>
<div class="form-group">
<label for="message"
class="form-label">Message</label>
<textarea class ="form-control" rows="5" cols="50" id="message" name="message" placeholder = "Enter your message..." tabindex="4"></textarea>
</div>
<div>
<button type="submit" class="btn">Send Message</button>
</div>
</form>
</div>
<?php
endif;
?>   
</body>
</html>