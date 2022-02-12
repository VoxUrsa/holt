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




// The Request-A-Quote system should be cleaned here but the limited calls don't affect efficiency. 
$deliverydate = $_POST['commercialRAQ-delivery-date'];
$companyname = $_POST['commercialRAQ-company-name'];
$name = $_POST['commercialRAQ-contact-name'];
$phone = $_POST['commercialRAQ-phone'];
$mailingaddress1 = $_POST['commercialRAQ-mailing-address-1'];
$mailingaddress2 = $_POST['commercialRAQ-mailing-address-2'];
$mailingcity = $_POST['commercialRAQ-mailing-city'];
$mailingstate = $_POST['commercialRAQ-mailing-state'];
$mailingzip = $_POST['commercialRAQ-mailing-zip'];
$deliveryaddress1 = $_POST['commercialRAQ-delivery-address-1'];
$deliveryaddress2 = $_POST['commercialRAQ-delivery-address-2'];
$deliverycity = $_POST['commercialRAQ-delivery-city'];
$deliverystate = $_POST['commercialRAQ-delivery-state'];
$deliveryzip = $_POST['commercialRAQ-delivery-zip'];
$visitoremail = $_POST['commercialRAQ-email'];
$tree = $_POST['commercialRAQ-tree'];
$height = $_POST['commercialRAQ-height'];
$standreq = $_POST['commercialRAQ-standreq'];
$coat = $_POST['commercialRAQ-coat'];
$product1 = $_POST['commercialRAQ-product1'];
$product2 = $_POST['commercialRAQ-product2'];
$product3 = $_POST['commercialRAQ-product3'];
$wreath = $_POST['commercialRAQ-wreath'];
$garland = $_POST['commercialRAQ-garland'];
$redpoinsettias = $_POST['commercialRAQ-redpoinsettias'];
$whitepoinsettias = $_POST['commercialRAQ-whitepoinsettias'];
$message = $_POST['commercialRAQ-notes'];

if(IsInjected($visitoremail))
{
    echo "Bad email value!";
    exit;
}

$email_from = 'formsubmission@oholtchristmastrees.com';//<== update the email address
$email_subject = "New Form submission";
$email_body = "You have received a new request for a corporate quote. \n".
"\n".
"Expected Delivery Date: $deliverydate \n".
"-- \n".
"Company Name: $companyname \n".
"-- \n".
"Contact Name: $name \n".
"-- \n".
"Phone: $phone \n".
"-- \n".
"Email: $visitoremail \n".
"-- \n".
"Billing Address1: $mailingaddress1 \n".
"Billing Address2: $mailingaddress2 \n".
"Billing City: $mailingcity \n".
"Billing State: $mailingstate \n".
"Billing Zip: $mailingzip \n".
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