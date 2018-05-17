<?php

$name=$_POST['name'];
$frommail=$_POST['frommail'];
$email="postmaster@kasimbafm.com";
$message=$_POST['message'];

mail ($email, $name, $message, "From:".$frommail);

Print "Your Message has been sent";


?>