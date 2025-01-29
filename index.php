
<!--<script src="https://apps.ringcentral.com/integration/ringcentral-embeddable/latest/adapter.js"></script>-->

<?php

require('includes/vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ )->load();

$client_id = $_ENV['RC_APP_CLIENT_ID'];

$server_URL = "https://apps.ringcentral.com/integration/ringcentral-embeddable/latest/app.html?" ;
$server_URL .= "clientId=$client_id&appServer=https://platform.ringcentral.com" ;

// Add on Team Messaging feature
// $server_URL .= "&disableGlip=false";

// add on SMS Template feature
// $server_URL .= "&enableSMSTemplate=1";

// Turn off the Call placement (dialpad) feature
//  $server_URL .= "&disableCall=true";

// Turn off the Call history feature
//  $server_URL .= "&disableCallHistory=true";

// Turn off the Contacts feature
// $server_URL .= "&disableContacts=true";

// Turn off the Messages feature
//$server_URL .= "&disableMessages=true";

// Turn off the Video meetings feature
//$server_URL .= "&disableMeeting=true";

$iframe_width	= "500" ;
$iframe_height	= "750" ;

$iframe_string = "<iframe id='rc-widget' allow='microphone' ";
$iframe_string .= "width='$iframe_width' ";
$iframe_string .= "height='$iframe_height' ";
$iframe_string .= "src='$server_URL'";
$iframe_string .= " ></iframe>";
 ?>

<!DOCTYPE html><html class='SiteWide' ><head >
<title >Embeddable Deep Dive App</title>
<link rel='stylesheet' href='css/ringcentral-custom.css'></head>

<?php echo "<br/>" . $iframe_string ; ?>

</html>
