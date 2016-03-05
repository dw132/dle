<?
session_start(); 
$BookingForm = $_POST['BookingForm'];

//$_a2a2a_ = $_POST['_a2a2a_'];
//$ReturnUrl = $_SERVER['HTTP_REFERER'];
//if($_a2a2a_ != "5") { exit; }
//$regexp = "/^[a-zA-Z0-9]{1,}/";

if ($BookingForm == "Y"){


$YourName=cleaninput($_POST["YourName"],"Text");
$Company=cleaninput($_POST["Company"],"Text");
$TelNo=cleaninput($_POST["TelNo"],"Text");
$EmailAddress=cleaninput($_POST["EmailAddress"],"Text");
$Message=cleaninput($_POST["Message"],"Text");


$subject = "Booking Enquiry from website";



$msg .= "<p style='font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #666666;
	line-height: 16px;'>
<b>$subject</b><br><br>

Name: $YourName<br>
Company: $Company<br>
Telephone: $TelNo<br>
Fax: $FaxNo<br>
Mobile No.: $MobNo<br>
Email: $EmailAddress<br>
Website: $Website<br>
Address1: $Address1<br>
Address2: $Address2<br>
Postcode: $PostCode<br>
<br>
Venue: $Venue<br>
Event: $Event<br>
Address1: $VenueAddress1<br>
Address2: $VenueAddress2<br>
Postcode: $VenuePostCode<br>
<br>
Message: $Message<br>
<br>";

$msg .= "</p>";

$to = "davewilde132@gmail.com";
//$to = "steve@fish-design.co.uk";



// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= "From: Danny Lowry Entertainments" . "\r\n";
$headers .= "Reply-To: enquires@dannylowry.co.uk" . "\r\n";
//$headers .= "BCc: steve@fish-design.co.uk" . "\r\n";

// Mail it
mail($to, $subject, $msg, $headers);

// end email
$_SESSION['FormSent'] = "Y";
Header("Location: contacts.php");
}


// Filters unwanted characters out of an input string.  Useful for tidying up FORM field inputs.
function cleanInput($strRawText,$strType) {

	if ($strType=="Number") {
		$strClean="0123456789.";
		$bolHighOrder=false;
	}
	else if ($strType=="VendorTxCode") {
		$strClean="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_.";
		$bolHighOrder=false;
	}
	else {
  		$strClean=" ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789.,'/{}@():?-_&£$=%~<>*+\"";
		$bolHighOrder=true;
	}
	
	$strCleanedText="";
	$iCharPos = 0;
		
	do
		{
    		// Only include valid characters
			$chrThisChar=substr($strRawText,$iCharPos,1);
			
			if (strspn($chrThisChar,$strClean,0,strlen($strClean))>0) { 
				$strCleanedText=$strCleanedText . $chrThisChar;
			}
			else if ($bolHighOrder==true) {
				// Fix to allow accented characters and most high order bit chars which are harmless 
				if (bin2hex($chrThisChar)>=191) {
					$strCleanedText=$strCleanedText . $chrThisChar;
				}
			}
			
		$iCharPos=$iCharPos+1;
		}
	while ($iCharPos<strlen($strRawText));
		
  	$cleanInput = ltrim($strCleanedText);
	return $cleanInput;
	
}
?>