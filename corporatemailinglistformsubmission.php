<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
  echo "error; you need to submit the form!";
  exit;
}

$cml_contact_preference = $_POST['cml_contact_preference'];
$companyname = $_POST['cml_company_name'];
$name = $_POST['cml_contact_name'];
$mailingaddress1 = $_POST['cml_mailing-address-1'];
$mailingaddress2 = $_POST['cml_mailing-address-2'];
$mailingcity = $_POST['cml_city'];
$mailingstate = $_POST['cml_state'];
$mailingzip = $_POST['cml_zip'];
$visitoremail = $_POST['cml_email'];

if(IsInjected($visitoremail))
{
    echo "Bad email value!";
    exit;
}

$email_from = 'formsubmission@oholtchristmastrees.com';//<== update the email address
$email_subject = "New Corporate Mailing List Signup";
$email_body = "You have received a new request for a corporate mailer signup. \n".
"\n".
"Company Name: $companyname \n".
"-- \n".
"Contact Name: $name \n".
"-- \n".
"Mailer Preference: $cml_contact_preference \n".
"-- \n".
"Email: $visitoremail \n".
"-- \n".
"Delivery Address1: $mailingaddress1 \n".
"Delivery Address2: $mailingaddress2 \n".
"Delivery City: $mailingcity \n".
"Delivery State: $mailingstate \n".
"Delivery Zip: $mailingzip \n".
"-- \n".
"\n".
"\n".
"\n".

$to = "oholtlandscape@aol.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitoremail \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thankyou.php');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 