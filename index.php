<?php

require_once("ringcentral-php-functions.inc");
show_errors();

require('includes/vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ )->load();

$client_id = $_ENV['RC_APP_CLIENT_ID'];
$client_secret = $_ENV['RC_APP_CLIENT_SECRET'];

$ringcentral_embed_width	= "500" ;
$ringcentral_embed_height	= "750" ;

$server_URL = "https://apps.ringcentral.com/integration/ringcentral-embeddable/latest/app.html?" ;
$server_URL .= "clientId=$client_id&appServer=https://platform.ringcentral.com" ;

$server_URL .= "&disableGlip=false";

//$server_URL .= "&disableGlip=false&enableSMSTemplate=1";
//  $server_URL .= "&disableGlip=false&disableCall=true&disableMessages=true";

$iFrame_string = "<iframe id='rc-widget' allow='microphone' ";
$iFrame_string .= "width='$ringcentral_embed_width' ";
$iFrame_string .= "height='$ringcentral_embed_height' ";
$iFrame_string .= "src='$server_URL'";
$iFrame_string .= " ></iframe>";

echo "<br/>" . $iFrame_string ;

