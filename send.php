<?php
$to_mail = "manolispoulakakis@gmail.com";

$name=$_POST['name'];

$email=$_POST['email'];

$subject= $_POST['subject'];

$message= $_POST['message'];

if(mail($to_mail, $name, $email, $subject,$message));
{

echo"Ευχαριστούμε που επικοινωνήσατε μαζί μας. Θα σας απαντήσουμε μέσα σε 24 ώρες.";
}


?>