<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
  echo "error; you need to submit the form!";
  exit;
}
if(isset($_POST['triggertest']))
{
	//This page should not be accessed directly. Need to submit the form.
  echo "error; This trigger is working!";
  exit;
}




$quotetype = $_POST['quotetype'];
$deliverydate = $_POST['residentialRAQ-delivery-date'];
$companyname = $_POST['residentialRAQ-company-name'];
$name = $_POST['residentialRAQ-contact-name'];
$phone = $_POST['residentialRAQ-phone'];
$mailingaddress1 = $_POST['residentialRAQ-mailing-address-1'];
$mailingaddress2 = $_POST['residentialRAQ-mailing-address-2'];
$mailingcity = $_POST['residentialRAQ-mailing-city'];
$mailingstate = $_POST['residentialRAQ-mailing-state'];
$mailingzip = $_POST['residentialRAQ-mailing-zip'];
$deliveryaddress1 = $_POST['residentialRAQ-delivery-address-1'];
$deliveryaddress2 = $_POST['residentialRAQ-delivery-address-2'];
$deliverycity = $_POST['residentialRAQ-delivery-city'];
$deliverystate = $_POST['residentialRAQ-delivery-state'];
$deliveryzip = $_POST['residentialRAQ-delivery-zip'];
$visitoremail = $_POST['residentialRAQ-email'];
$tree = $_POST['residentialRAQ-tree'];
$height = $_POST['residentialRAQ-height'];
$standreq = $_POST['residentialRAQ-standreq'];
$coat = $_POST['residentialRAQ-coat'];
$product1 = $_POST['residentialRAQ-product1'];
$product2 = $_POST['residentialRAQ-product2'];
$product3 = $_POST['residentialRAQ-product3'];
$wreath = $_POST['residentialRAQ-wreath'];
$garland = $_POST['residentialRAQ-garland'];
$redpoinsettias = $_POST['residentialRAQ-redpoinsettias'];
$whitepoinsettias = $_POST['residentialRAQ-whitepoinsettias'];
$message = $_POST['residentialRAQ-notes'];

if(IsInjected($visitoremail))
{
    echo "Bad email value!";
    exit;
}

$email_from = 'formsubmission@oholtchristmastrees.com';//<== update the email address
$email_subject = "New Form submission";
$email_body = "You have received a new request for a residential quote. \n".
"\n".
"Quote Type: $quotetype \n".
"-- \n".
"Expected Delivery Date: $deliverydate \n".
"-- \n".
"First Name: $companyname \n".
"-- \n".
"Last Name: $name \n".
"-- \n".
"Phone: $phone \n".
"-- \n".
"Email: $visitoremail \n".
"-- \n".
"Delivery Address1: $deliveryaddress1 \n".
"Delivery Address2: $deliveryaddress2 \n".
"Delivery City: $deliverycity \n".
"Delivery State: $deliverystate \n".
"Delivery Zip: $deliveryzip \n".
"-- \n".
"Tree Species: $tree \n".
"-- \n".
"Tree Height: $height \n".
"-- \n".
"Tree Stand Requested: $standreq \n".
"-- \n".
"Fireproofing or Flocking: $coat \n".
"-- \n".
"Keeps-It-Green Requested: $product1 \n".
"Tree Bag Requested: $product2 \n".
"Tree Netting Requested: $product3 \n".
"-- \n".
"Wreath: $wreath \n".
"-- \n".
"Garland (In Feet): $garland \n".
"-- \n".
"Red Poinsettias: $redpoinsettias \n".
"-- \n".
"White Poinsettias: $whitepoinsettias \n".
"-- \n".
"Notes: $message".
"\n".
"\n".
"\n".

$to = "oholtchristmastrees@gmail.com";//<== update the email address
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