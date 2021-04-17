<?php 
if(isset($_POST['name'])&& isset($_POST['email'])&& filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
$to = 's2100157@edu.bc.fi';
$subject = 'User' . $_POST['name'] . 'with email' . $_POST['email'] . 'has sent me an email';
$message = $_POST['message'];

$success = mail($to. $subject, $message);

if(!$success){
    echo 'an error has occured while sending the email';
} else {
    echo ' email was sent';
}
} else {
    echo ' invalid input';
}

/*echo '<pre>';
print_r($_POST);
echo '</pre>';
$sent_status = mail($_POST['email'], 'Sent from test PHP application', ($_POST['message'] . ' sent by' . $_POST['user']));

if($sent_status){
    echo 'Message was delivered';
}else{
    echo 'Email was not sent';
}*/
?>