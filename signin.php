<?php

$pfw_ip= $_SERVER['REMOTE_ADDR'];
$first_name = addslashes($_POST['first_name']);
$last_name = addslashes($_POST['last_name']);
$age = addslashes($_POST['age']);
$email = addslashes($_POST['email']);
$phone = addslashes($_POST['phone']);
$department = addslashes($_POST['department']);
$gender = addslashes($_POST['gender']);
$username = addslashes($_POST['username']);
$date = addslashes($_POST['date']);

if (! ereg('[A-Za-z0-9_-]+\@[A-Za-z0-9_-]+\.[A-Za-z0-9_-]+', $email))
{
die("<p align='center'><font face='Arial' size='3' color='#FF0000'>Please enter a valid email</font></p>");
}

if (strlen($email) == 0 )
{
die("<p align='center'><font face='Arial' size='3' color='#FF0000'>Please enter a valid email</font></p>");
}

//Sending auto respond Email to visitor
//$pfw_header = "From: info@cotswoldpc.co.uk\n"
//  . "Reply-To: info@cotswoldpc.co.uk\n";
//$pfw_subject = "This is your Username and Password for our Wifi";
//$pfw_email_to = "$email";
//$pfw_message = "Dear $firstname $lastname\n"
//. "Your Wifi username is $email\n"
//. "your Wifi password is $password\n"
//. "\n"
//. "Please enjoy our free wifi";
//@mail($pfw_email_to, $pfw_subject ,$pfw_message ,$pfw_header ) ;

//saving record to MySQL database
                        
                        
 $pfw_strQuery = "INSERT INTO customers (username,first_name,last_name,age,email,phone,department,gender,creationdate) values ('user1','$first_name', '$last_name', '$age','$email','$phone','$department','$gender', NOW())";                       

$pfw_host = "localhost";
$pfw_user = "gidibusi_sterling";
$pfw_pw = "sterling@2018";
$pfw_db = "gidibusi_sterlingbank";

$pfw_link = new mysqli($pfw_host, $pfw_user, $pfw_pw);
if (!$pfw_link) {
 die('Could not connect: ' . mysqli_error());
}
$pfw_db_selected = mysqli_select_db($pfw_link, $pfw_db );
if (!$pfw_db_selected) {
die ('Can not use $pfw_db : ' . mysqli_error());
}

$pfw_result = mysqli_query($pfw_link, $pfw_strQuery);
if (!$pfw_result) {
 die('Invalid query: ' . mysqli_error());
}
mysqli_close($pfw_link);

header('Location: http://192.168.10.1/login?username=user1&password=user1'); 
die();
?>
